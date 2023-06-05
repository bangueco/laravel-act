<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnimationController extends Controller
{
    public function returnPage() {
        return view('animation');
    }
}
