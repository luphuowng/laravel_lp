<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ustomerController extends Controller
{
    public function index() {

        $customer = DB::table('customer')->get();

        return view('admin.customer.index', compact('customer'));
    }

    public function create(){

        return view('admin.customer.create');
    }

    public function store(Request $request){
        $Cus_Name = $request->Cus_Name;
        $Cus_Phone = $request->Cus_Phone;
        $Cus_Add = $request->Cus_Add;

        $insertCus = DB::table('customer')->insert(
            [
                'cus_name' => $Cus_Name,
                'cus_phone' => $Cus_Phone,
                'cus_add' => $Cus_Add
            ]
        );

        return redirect()->route('customer.index');
    }

    public function delete($idCus){
        $del = DB::table('customer')->where('cus_id',$idCus)->first();
        return redirect()->back();
    }

    public function edit($idCus) {
        $cus = DB::table('customer')->where('cus_id', $idCus)->first();
        return view('admin.customer.edit', compact('cus'));
    }

    public function update(Request $request) {

        $newName = $request->Cus_Name;
        $newPhone = $request->CUs_Phone;
        $newAdd = $request->Cus_Add;
        $idCus = $request->id_Cus;
        $cus = DB::table('customer')->where('cus_id', $idCus)->update(
            [
                'cus_name' => $newName,
                'cus_phone' => $newPhone,
                'cus_add' => $newAdd
            ]
        );
        return redirect()->route('customer.index');
    }
}
