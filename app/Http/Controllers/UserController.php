<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class UserController extends Controller
{
    public function crash() {
        $usr = User::orderBy('fname')->get();
        return view('users.index', ['users'=>$usr]);
    }
}
