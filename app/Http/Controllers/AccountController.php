<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Account;
class AccountController extends Controller
{
    public function crash() {
        $act = Account::orderBy('user_id')->get();
        return view('accounts.index', ['accounts'=>$act]);
    }
}
