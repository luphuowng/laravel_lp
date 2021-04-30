<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use DB;

class ProductController extends Controller
{
    public function index() {

        $product = DB::table('product')->join('category','category.cat_id','product.cat_id')->get();


        return view('admin.product.index', compact('product'));
    }

    public function create(){
        $category = DB::table('category')->get();
        return view('admin.product.create', compact('category'));
    }

    public function store(Request $request){
        $Pro_Name = $request->Pro_Name;
        $Cat_Id = $request->Cat_Id;
        $Pro_Price = $request->Pro_Price;
        $Pro_Desc = $request->Pro_Desc;
        // $Pro_Img = $request->Pro_Img;
        if ($request->hasFile('Pro_Img')) {
            # code...
            $file_name = $request->file('Pro_Img')->getClientOriginalName();
            $request->file('Pro_Img')->move(public_path('hinh-anh-san-pham'),$file_name);
            $insertPro = DB::table('product')->insert(
                [
                    'pro_name' => $Pro_Name,
                    'cat_id' => $Cat_Id,
                    'pro_price' => $Pro_Price,
                    'pro_desc' => $Pro_Desc,
                    'pro_img' => $file_name
                ]
            );
        }else {
            $insertPro = DB::table('product')->insert(
                [
                    'pro_name' => $Pro_Name,
                    'cat_id' => $Cat_Id,
                    'pro_price' => $Pro_Price,
                    'pro_desc' => $Pro_Desc,
                    // 'pro_img' => $Pro_Img
                ]
            );
        }


        return redirect()->route('product.index');
    }

    public function delete($idPro){
        $del = DB::table('product')->where('pro_id',$idPro)->first();
        return redirect()->back();
    }

    public function edit($idPro) {
        $pro = DB::table('product')->join('category','category.cat_id','product.cat_id')->where('pro_id', $idPro)->first();
        $cat = DB::table('category')->get();
        return view('admin.product.edit', compact('pro','cat'));
    }

    public function update(Request $request) {

        $newName = $request->Pro_Name;
        $newPrice = $request->Price;
        $newDesc = $request->Emp_Add;
        $newImg = $request->Emp_Img;
        $idPro = $request->Pro_ID;
        $idCat = $request->Cat_ID;
        $pro = DB::table('product')->where('pro_id', $idPro)->update(
            [
                'pro_name' => $newName,
                'price' => $newPrice,
                'pro_desc' => $newDesc,
                'pro_img' => $newImg,
                'cat_id' => $idCat
            ]
        );
        return redirect()->route('product.index');
    }
}
