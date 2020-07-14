<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function show (User $user){
        return view('admin.users.profile',['user'=>$user]);
    }
}
