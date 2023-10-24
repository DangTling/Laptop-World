<?php

namespace App\Http\Controllers;

use App\Models\Products;
use App\Models\User;
use Illuminate\Http\Request;

class Cart extends Controller
{
    public function add_to_cart(Request $request, Products $products)
    {
        $cart = $request->session()->get("cart", []);
        if (array_key_exists($products->id, $cart)) {
            $cart[$products->id]['quantity']++;
        } else {
            $cart[$products->id] = [
                'product' => $products,
                'quantity' => 1,
            ];
        }
        $request->session()->put('cart', $cart);
        return redirect()->route('user.index')->with('success', 'Sản phẩm đã được thêm vào giỏ hàng.');
    }

    public function show()
    {
        $user = User::query()->where("email", session()->get("email"))->firstOrFail();
        $cart = session('cart', []);
        return view('show_cart', ['cart' => $cart, 'user' => $user]);
    }

    public function remove_from_cart(Request $request, Products $products)
    {
        $cart = $request->session()->get('cart', []);
        if (array_key_exists($products->id, $cart)) {
            unset($cart[$products->id]);
            $request->session()->put('cart', $cart);
        }

        return redirect()->route('user.show_cart')->with('success', 'Sản phẩm đã được xóa khỏi giỏ hàng.');
    }

    public function updateCartQuantity(Request $request)
    {
        $productId = $request->input('product');
        $newQuantity = $request->input('quantity');
        $cart = session('cart', []);

        if (array_key_exists($productId, $cart)) {

            $cart[$productId]['quantity'] = $newQuantity;
            session(['cart' => $cart]);

            return response()->json(['message' => 'Số lượng đã được cập nhật thành công']);
        }

        return response()->json(['error' => 'Không tìm thấy sản phẩm trong giỏ hàng']);
    }
}
