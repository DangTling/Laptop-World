<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Http\Requests\StoreAdminRequest;
use App\Http\Requests\UpdateAdminRequest;
use Illuminate\Http\Request;
use Throwable;

class AdminController extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function process_login(Request $request)
    {
        $email = $request->get('email');
        $password = $request->get('password');

        if (empty($email) || empty($password)) {
            return redirect()->route('admin.login')->with('error', 'Vui lòng nhập đầy đủ email và mật khẩu.');
        }
        try {
            $admin = Admin::query()
                ->where('email', $request->get('email'))
                ->where('password', $request->get('password'))
                ->firstOrFail();

            session()->put('email', $admin->email);
            session()->put('name', $admin->name);
            session()->put('level', $admin->level);
            return redirect()->route('admin.index');
        } catch (Throwable $th) {
            //throw $th;
            return redirect()->route('admin.login')->with('error', 'Email hoặc mật khẩu không đúng.');
        }
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.dashboard');
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
    public function store(StoreAdminRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Admin $admin)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Admin $admin)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAdminRequest $request, Admin $admin)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Admin $admin)
    {
        //
    }

    public function logout()
    {
        session()->flush();
        return redirect()->route('admin.login');
    }
}
