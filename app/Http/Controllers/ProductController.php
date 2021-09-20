<?php

namespace App\Http\Controllers;

use App\Models\Products;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\DB;

class ProductController extends Controller
{
    public function index(){
        $products = Products::all();
        return view('Products.ProductsIndex' , compact('products'));
    }

    public function show(Products $products){
     
        return view('Products.ProductsShow',compact('products'));
      }

    public function create(){
        return view('Products.ProductsCreate');
    }

    public function store(Request $req){
        request()->validate([
            'photo'       =>'sometimes|mimes:jpeg,jpg,png|max:5000',
            'product_name'  =>'required|string|min:2|max:100',
            'qty'           =>'required|integer',
            'price'         =>'required|integer',
        ]);

        $products= new Products();
        $products ->product_name = $req->input('product_name');
        $products -> qty = $req->input('qty');
        $products -> price = $req->input('price');

        if ($req->hasfile('photo')) {
            $file       = $req->file('photo');
            $extension  = $file->getClientOriginalExtension(); // getting image extension
            $filename   = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);
            $products->photo = $filename;
        }

        $products->save();
        Session::flash('statuscode' , 'success');
        return  redirect('/')->with('status' , 'Produit Enregistré');

    }

    public function edit($id){
        $products= Products::findOrFail($id);
        return view('Products.ProductsEdit',compact('products'));
    }

    public function update(Request $req , $id){

        $products= Products::find($id);
        $products ->product_name = $req->input('product_name');
        $products -> qty = $req->input('qty');
        $products -> price = $req->input('price');

        if ($req->hasfile('photo')) {

            $destination = 'uploads/products/'.$products->photo;

            if(File::exists($destination)){
                File::delete($destination);
            }
            $file = $req->file('photo');
            $extension = $file->getClientOriginalExtension(); // getting image extension
            $filename = time() . '.' . $extension;
            $file->move('uploads/products/', $filename);

            $products->photo = $filename;
        }
        $products->update();
        Session::flash('statuscode' , 'success');
        return  redirect('/')->with('status' , 'Produit Modifié');
    }

    public function destroy(Request $req , $id){


        //$destination = 'uploads/products/'.$products->photo;

        $delete = DB::table('products')
                      ->where('id' , $id )
                       ->delete();

        Session::flash('statuscode' , 'error');
        return redirect('/')->with('status' , 'Produit Supprimé');
    }
}
