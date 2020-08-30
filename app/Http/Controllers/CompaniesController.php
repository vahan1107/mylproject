<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class CompaniesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        return view('create_company');
    }

    public function store(Request $request) {
        $input = $request->all();
        $logo = $request->file('c_logo');
        DB::table('companies')->insert(
            array(
                'name' => $input['c_name'],
                'email' => $input['c_email'],
                'logo' => $logo->hashName(),
                'website' => $input['c_website']
            )
        );
        $logo->store('public');
        return redirect('admin/companies');
    }

    public function update(Request $request) {
        
    }

    public function index()
    {
        $companies = DB::table('companies')->get();
        return view('companies')->with('companies', $companies);
    }
}
