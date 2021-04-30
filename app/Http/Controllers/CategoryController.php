<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
class CategoryController extends Controller
{
    public function index() {
        // select * from category;
        $category = DB::table('category')->get();
        // dd($category);
        return view('admin.category.index', compact('category'));
    }

    public function create() {
        return view('admin.category.create');
    }

    public function store(Request $request) {
        $tenLoai = $request->tenLoai;

        //tim ra phan tu dau tien thoa dieu kieu
        //select * from category where cat_name = $tenLoai;
        $findIdCat = DB::table('category')->where('cat_name', $tenLoai)->first();

        // if ($findIdCat) {
        //     # code...
        //     // dd("value exist");
        //     // Session::put('alert', 'san pham da ton tai');
        // }

        $insertCat = DB::table('category')->insert(
            [
                'cat_name' => $tenLoai
            ]
        );

        return redirect()->route('category.index');
    }

    public function destroy($idCat) {
        $del = DB::table('category')->where('cat_id', $idCat)->delete();
        return redirect()->back();
    }


    public function edit($idCat) {
        $cat = DB::table('category')->where('cat_id', $idCat)->first();
        return view('admin.category.edit', compact('cat'));
    }

    public function update(Request $request) {

        $newName = $request->tenLoai;
        $idCat = $request->idLoai;
        $cat = DB::table('category')->where('cat_id', $idCat)->update(
            [
                'cat_name' => $newName
            ]
        );
        return redirect()->route('category.index');
    }
}
