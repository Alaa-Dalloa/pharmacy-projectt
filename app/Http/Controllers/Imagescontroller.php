<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\image;
use App\product;
class Imagescontroller extends Controller
{
    public function create ()
    {
      $products = product::all();
       return view ('images.create' , compact('products'));

    }
    public function store (Request $request)
    {

      $image= new image ;
      $photoName =rand().time().'.'.$request->image->getClientOriginalExtension();
      $request->image->move(public_path('upload'), $photoName );
      $image->image=$photoName ;
      $image->product_id=$request->product_id;
      $image->save();   
      return back();
    }
    public function index ()
    {

    	$images = image::all();
      return view ('images.index' , compact('images'));
    }
    public function destroy($id)
{
  $image= image::where('id' , $id)->first();
  $image->delete();
  return back();

}
public function edit ($id)
{
   $image= image::find($id);
   return view ('images.edit' , compact('image'));

}
public function update($id , Request $request)
{
    $image= image::find($id);
    $photoName =rand().time().'.'.$request->image->getClientOriginalExtension();
    $request->image->move(public_path('upload'), $photoName);
    $image->image=$photoName ;
    $image->product_id=$request->product_id;

    $image-> save();
    return back();
}
}
