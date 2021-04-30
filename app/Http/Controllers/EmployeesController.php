<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class EmployeesController extends Controller
{
    public function index() {

        $employees = DB::table('staff')->get();

        return view('admin.employees.index', compact('employees'));
    }

    public function create(){

        return view('admin.employees.create');
    }

    public function store(Request $request){
        $Emp_Name = $request->Emp_Name;
        $Emp_Phone = $request->Emp_Phone;
        $Emp_Add = $request->Emp_Add;
        $Emp_Img = $request->Emp_Img;

        $insertCus = DB::table('customer')->insert(
            [
                'emp_name' => $Emp_Name,
                'emp_phone' => $Emp_Phone,
                'emp_add' => $Emp_Add,
                'emp_img' => $Emp_Img
            ]
        );

        return redirect()->route('Employees.index');
    }

    public function delete($idEmp){
        $del = DB::table('employees')->where('emp_id',$idEmp)->first();
        return redirect()->back();
    }

    public function edit($idEmp) {
        $emp = DB::table('employees')->where('emp_id', $idEmp)->first();
        return view('admin.employees.edit', compact('emp'));
    }

    public function update(Request $request) {

        $newName = $request->Emp_Name;
        $newPhone = $request->Emp_Phone;
        $newAdd = $request->Emp_Add;
        $newImg = $request->Emp_Img;
        $idEmp = $request->id_Emp;
        $cat = DB::table('employees')->where('emp_id', $idEmp)->update(
            [
                'emp_name' => $newName,
                'emp_phone' => $newPhone,
                'emp_add' => $newAdd,
                'emp_img' => $newImg
            ]
        );
        return redirect()->route('employees.index');
    }
}
