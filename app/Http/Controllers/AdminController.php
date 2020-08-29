<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AdminController extends Controller
{
    // added by me
    public function __construct() {
        $this->middleware('auth');
    }

    public function admin() {
        return view('admin');
    }
}
