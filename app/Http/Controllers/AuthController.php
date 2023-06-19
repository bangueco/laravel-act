<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function returnPage() {
        return view('login');
    }

    public function login(Request $r) {
        echo $r->username;
        echo $r->password;
    }
}
