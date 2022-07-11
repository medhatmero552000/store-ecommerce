<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AdminLoginRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{


    public function login()
    {
        return view('admin.auth.login');
    }

    public function postLogin(AdminLoginRequest $request)
    {
        /* check remember me */
        $remember_me = $request->has('remember_me') ? true : false;

        /* check if user in admin table using guard*/
        if (auth()->guard('admin')->attempt(['email' => $request->input('email'), 'password' => $request->input('password')], $remember_me)) {
            return redirect()->route('admin.index');
        }
        return redirect()->back()->with(['error' => 'البريد الإلكترونى أو كلمة المرور غير صحيحة']);
    }

    public function admin_Logout()
    {
        auth('admin')->logout();
        return redirect()->route('admin.login');
    }
}
