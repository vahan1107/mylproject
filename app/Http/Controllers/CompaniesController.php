<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
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
        $input = $request->all();
        $company = DB::table('companies')->where('id', $input['c_id'])->first();
        return view('update_company')->with('company', $company);
    }

    public function save(Request $request) {
        $input = $request->all();
        $update_data = array(
            'name' => $input['c_name'],
            'email' => $input['c_email'],
            'website' => $input['c_website']
        );

        if(array_key_exists('c_logo', $input)) {
            $logo = $request->file('c_logo');
            $logo->store('public');
            $update_data['logo'] = $logo->hashName();
        }
        DB::table('companies')->where('id', $input['c_id'])->update($update_data);
        return redirect('admin/companies');
    }

    public function delete(Request $request) {
        $input = $request->all();
        $company = DB::table('companies')->where('id', $input['c_id']);
        Storage::delete('public/'.$company->first()->logo);
        $company->delete();
        return redirect('admin/companies');
    }

    public function index()
    {
        $companies = DB::table('companies')->paginate(2);
        return view('companies')->with('companies', $companies);
    }
}
