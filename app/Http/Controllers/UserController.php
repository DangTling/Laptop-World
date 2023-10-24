<?php

namespace App\Http\Controllers;

use App\Models\Orders;
use App\Models\Orders_Detail;
use App\Models\User;
use App\Http\Requests\StoreUserRequest;
use App\Http\Requests\UpdateUserRequest;
use App\Models\Companies;
use App\Models\Products;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function register()
    {
        return view("register");
    }

    public function process_register(Request $request)
    {
        $email = $request->get("email");
        $password = $request->get("password");
        $name = $request->get("name");
        $address = $request->get("address");
        $gender = $request->get("gender");
        $password_confirm = $request->get("password-confirm");
        $birth_of_date = $request->get("birth_of_date");
        $phone_number = $request->get("phone_number");

        if (empty($email) || empty($password) || empty($name) || empty($address) || empty($gender) || empty($password_confirm) || empty($birth_of_date) || empty($phone_number)) {
            return redirect()->route('user.register')->with("error", "Vui lòng nhập đầy đủ thông tin");
        }

        if ($password != $password_confirm) {
            return redirect()->route("user.register")->with("error", "Mật khẩu xác thực không trùng nhau");
        }

        $obj = new User();

        if ($request->hasFile('avatar')) {
            $path = $request->file('avatar')->store('public/avatar');
            $obj->avatar = 'avatar/' . $request->file('avatar')->hashName();
        }
        $obj->email = $email;
        $obj->name = $name;
        $obj->address = $address;
        $obj->gender = $gender;
        $obj->password = $password;
        $obj->birth_of_date = $birth_of_date;
        $obj->phone_number = $phone_number;
        $obj->save();
        session()->put("email", $obj->email);
        session()->put("name", $obj->name);
        session()->put("avatar", $obj->avatar);
        return redirect()->route('user.index')->with('success', 'Chào mừng ghé thăm lần đầu');
    }

    public function login()
    {
        return view("login");
    }

    public function process_login(Request $request)
    {
        $email = $request->get("email");
        $password = $request->get("password");

        if (empty($email) || empty($password)) {
            return redirect()->route('user.login')->with("error", "Vui lòng nhập đầy đủ email và mật khẩu");
        }
        try {
            $user = User::query()->where("email", $email)->where("password", $password)->firstOrFail();
            session()->put("email", $user->email);
            session()->put("name", $user->name);
            session()->put("avatar", $user->avatar);
            return redirect()->route("user.index")->with("success", "Chào mừng khách hàng");
        } catch (\Throwable $e) {
            return redirect()->route("user.login")->with("error", $e->getMessage());
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $user = User::query()->where("email", session()->get("email"))->firstOrFail();
        $lastests = Products::take(3)->get();
        $price_search = $request->get("price-search");
        if (empty($price_search)) {
            $price_search = 99999999;
        }
        $search_result = Products::query()->where('price', '<=', $price_search)->take(6)->get();
        $search_result->append(['price_search' => $price_search]);
        $companies = Companies::take(3)->get();
        return view("index", [
            'lastests' => $lastests, 'price_search' => $price_search,
            'search_results' => $search_result, 'companies' => $companies,
            'user' => $user
        ]);
    }

    public function product_page(Products $products)
    {
        $user = User::query()->where("email", session()->get("email"))->firstOrFail();
        $similar_products = Products::take(3)->get();
        return view('product_page', [
            'product' => $products,
            'similar_products' => $similar_products,
            'user' => $user,
        ]);
    }

    public function pay_order()
    {
        $user = User::query()->where("email", session()->get("email"))->firstOrFail();
        $cart = session('cart', []);
        return view('pay', ['cart' => $cart, 'user' => $user]);
    }

    public function check_out(Request $request)
    {
        // dd($request);
        $receiver_name = $request->get("receiver_name");
        $receiver_address = $request->get("receiver_address");
        $receiver_phone_number = $request->get("receiver_phone_number");
        $status = $request->get("status");
        $user_id = $request->get("user_id");
        $total_payment = $request->get("total_payment");

        if (empty($receiver_name) || empty($receiver_address) || empty($receiver_phone_number) || empty($user_id) || empty($total_payment)) {
            return redirect()->route('user.pay')->with("error", "Vui lòng nhập đầy đủ thông tin");
        };

        $obj = new Orders();
        $obj->receiver_name = $receiver_name;
        $obj->receiver_address = $receiver_address;
        $obj->receiver_phone_number = $receiver_phone_number;
        $obj->status = $status;
        $obj->user_id = $user_id;
        $obj->total_payment = $total_payment;
        $obj->save();

        $order_id = $obj->id;
        $cart = session('cart', []);
        foreach ($cart as $item) {
            $order_detail = new Orders_Detail();
            $order_detail->order_id = $order_id;
            $order_detail->product_id = $item['product']->id;
            $order_detail->quantity = $item['quantity'];
            $order_detail->save();
        }

        session()->forget('cart');

        return redirect()->route("user.index")->with("success", "Đơn hàng đã được tiếp nhận");
    }

    public function manage_users(Request $request)
    {
        $search = $request->get('q');

        $data = User::query()->where(column: 'name', operator: 'like',  value: '%' . $search . '%')->paginate(5);
        return view("admin.users.index", ["data" => $data, "search" => $search]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        return view('profile', ['user' => $user]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUserRequest $request, User $user)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('users.index')->with('success', 'Xóa thành công');
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('user.login');
    }
}
