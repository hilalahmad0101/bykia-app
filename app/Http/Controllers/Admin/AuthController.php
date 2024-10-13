<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Auth;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function index()
    {
        return view("admin.auth.login");
    }

    public function login(Request $request)
    {
        $request->validate([
            "email" => "required|email|exists:admins,email",
            "password" => "required"
        ]);

        $admin = Auth::guard('admin')->attempt(["email" => $request->email, "password" => $request->password]);

        if ($admin) {
            return to_route("admin.dashboard")->with("success", "Login successfully");
        } else {
            return to_route("admin.login")->with("error", "invalid credential");
        }


    }

    public function logout(){
        Auth::guard("admin")->logout();
        return redirect()->route("admin.login")->with("success","Logout successfully");
    }
}