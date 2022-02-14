<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
class ProductController extends Controller
{
    
    public function addproduct(){
        return view ('product.addproduct');
    }
    public function addproductsubmit(Request $req){
        $req->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required'
        ]);
        $pr = new Product();
        $pr->Name = $req->name;
        $pr->Price = $req->price;
        $pr->Quantity = $req->quantity;
        $pr->Description = $req->description;
        $pr->save();
        return "Product added";
    }
    public function list(){
        $products = Product::all();
        return view('product.list')
        ->with('products',$products);
    }
    public function editProduct(Request $req){
        $product = Product::where('id','=',$req->id)->first();
        return view ('product.editProduct')
        ->with('product',$product);
    }
    public function editProductSubmit(Request $req){
        $req->validate([
            'name'=>'required',
            'price'=>'required',
            'quantity'=>'required',
            'description'=>'required'
        ]);
        $pr = Product::where('id','=',$req->id)->first();
        $pr->Name = $req->name;
        //return $req->name;
        $pr->Price = $req->price;
        $pr->Quantity = $req->quantity;
        $pr->Description = $req->description;
        $pr->save();
        return "Product updated";

    }
    public function deleteProduct(Request $req){
        $pr = Product::where('id','=',$req->id)->first();
        $pr->delete();
        return "Product Deleted";
    }
    
}
