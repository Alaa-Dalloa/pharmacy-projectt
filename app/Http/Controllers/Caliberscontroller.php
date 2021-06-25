<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\gauge;
use App\Product;

class Caliberscontroller extends Controller
{
    public function create ()
    {  
       $products= product::all();
       return view ('gauges.create' , compact('products'));

    }
    public function store (Request $request)
    {
      $gauge= new gauge ;
      $gauge->value = $request->value ;
      $gauge->product_id=$request->product_id;
      $gauge->save();   
      return back();
    }
    public function index ()
    {

    	$gauges = gauge::all();
      return view ('gauges.index' , compact('gauges'));
    }
    public function destroy($id)
{
  $gauge= gauge::where('id' , $id)->first();
  $gauge->delete();
  return back();

}
public function edit ($id)
{
   $gauge= gauge::find($id);
   return view ('gauges.edit' , compact('gauge'));

}
public function update($id , Request $request)
{
    $gauge= gauge::find($id);
    $gauge->value=$request->value;
    $gauge->product_id=$request->product_id;
    $gauge-> save();
    return back();
}
}
