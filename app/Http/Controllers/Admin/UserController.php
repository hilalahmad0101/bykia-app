<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        $users=User::latest()->get();
        return view("admin.users.list",compact("users"));
    }


    public function delete($id){
        User::destroy($id);
        return to_route("admin.user.list")->with('success','User delete successfully');
    }
}
