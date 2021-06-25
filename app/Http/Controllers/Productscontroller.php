<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\product;
use App\catigory;
use App\brand;
class Productscontroller extends Controller
{
    public function create ()
    {
         $categories= catigory::all();
         $brands= brand::all(); 
    	   return view ('products.create' , compact ('categories'), compact ('brands'));  
    }
    public function store (Request $request)
    {
      $product      = new product ;
      $product->name=$request->name;
      $product->name_trade=$request->name_trade;
      $product->price     =$request->price;
      $product->count     =$request->count;
      $product->size      =$request->size;
      $product->start_date=$request->start_date;
      $product->end_date  =$request->end_date;
      $product->detailes  =$request->detailes;
      $product->warning_using=$request->warning_using;
      $product->offers    =$request->offers;
      $product->catigory_id=$request->catigory_id;
      $product->brand_id   =$request->brand_id;
	    $product->save();   
      return back();

    }

    public function index ()
    {
      $products = product::all();
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
  $categories= catigory::find($id);
  $brands= brand::find($id);
	$product= product::find($id);
	return view ('products.edit' , compact('product') , compact ('categories'), compact ('brands'));
  }
public function update($id , Request $request)

{ 
      $product= product::find($id);
      $product->name      =$request->name;
      $product->name_trade=$request->name_trade;
      $product->price     =$request->price;
      $product->count     =$request->count;
      $product->size      =$request->size;
      $product->start_date=$request->start_date;
      $product->end_date  =$request->end_date;
      $product->detailes  =$request->detailes;
      $product->warning_using=$request->warning_using;
      $product->offers      =$request->offers;
      $product->catigory_id=$request->catigory_id;
      $product->brand_id   =$request->brand_id;
	    $product->save();  
	     return back (); 
}

}
