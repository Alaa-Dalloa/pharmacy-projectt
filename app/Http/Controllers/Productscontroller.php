<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
class Productscontroller extends Controller
{
    public function create ()
    {

    	   return view ('products.create');

    }
    public function store (Request $request)
    {
      $Product= new Product ;
      $Product->name=$request->name;
      $Product->name_trade=$request->name_trade;
      $Product->price=$request->price;
      $Product->count=$request->count;
      $Product->size=$request->size;
      $Product->start_date=$request->start_date;
      $Product->end_date=$request->end_date;
      $Product->detailes=$request->detailes;
      $Product->warning_using=$request->warning_using;
      $Product->offers=$request->offers;
      $Product->catigory_id=$request->catigory_id;
      $Product->brand_id=$request->brand_id;
      
	  $Product->save();   
      return back();

    }

    public function index ()
    {
      $products =product::all();
      return view ('products.index' , compact('products'));
    }
   public function destroy($id)
   {
     $product=product::find($id);
     $product->delete();
     return back();
   }
   public function edit ($id)
{
	$product= product::find($id);
	return view ('products.edit' ,compact('product'));
}
public function update($id , Request $request)

{ 
      $product= product::find($id);
      $Product->name=$request->name;
      $Product->name_trade=$request->name_trade;
      $Product->price=$request->price;
      $Product->count=$request->count;
      $Product->size=$request->size;
      $Product->start_date=$request->start_date;
      $Product->end_date=$request->end_date;
      $Product->detailes=$request->detailes;
      $Product->warning_using=$request->warning_using;
      $Product->offers=$request->offers;
      
	  $Product->save();  
	  return back (); 
}




}
