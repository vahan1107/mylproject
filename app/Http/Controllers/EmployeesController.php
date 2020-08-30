<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;

class EmployeesController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create() {
        $companies = DB::table('companies')->get();
        return view('create_employee')->with('companies', $companies);;
    }

    public function store(Request $request) {
        $input = $request->all();
        print_r($input);
        DB::table('employees')->insert(
            array(
                'first_name' => $input['ef_name'],
                'last_name' => $input['el_name'],
                'company_id' => $input['e_company'],
                'email' => $input['e_email'],
                'phone' => $input['e_phone']
            )
        );
        return redirect('admin/employees');
    }

    public function update(Request $request) {
        $input = $request->all();
        $employee = DB::table('employees')->where('id', $input['e_id'])->first();
        $companies = DB::table('companies')->get();
        $info = (object) array('employee' => $employee, 'companies' => $companies);
        // print_r($info);
        return view('update_employee')->with('info', $info);
    }

    public function save(Request $request) {
        $input = $request->all();
        DB::table('employees')->where('id', $input['e_id'])->update(array(
            'first_name' => $input['ef_name'],
            'last_name' => $input['el_name'],
            'company_id' => $input['e_company'],
            'email' => $input['e_email'],
            'phone' => $input['e_phone']
        ));
        return redirect('admin/employees');
    }

    public function delete(Request $request) {
        $input = $request->all();
        $employee = DB::table('employees')->where('id', $input['e_id']);
        $employee->delete();
        return redirect('admin/employees');
    }

    public function index()
    {
        $employees = DB::table('employees')
                    ->leftJoin('companies', 'employees.company_id', '=', 'companies.id')
                    ->paginate(10, array('employees.*', 'companies.name as c_name', 'companies.website as company_website'));
        return view('employees')->with('employees', $employees);
    }
}
