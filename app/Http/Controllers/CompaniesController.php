<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use View;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $companies = DB::table('companies')->get();
        return view('companies')->with('companies', $companies);
    }
}
