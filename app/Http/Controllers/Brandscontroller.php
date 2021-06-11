<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\brand;
class Brandscontroller extends Controller
{
    public function create ()
    {
       return view ('brands.create');

    }
    public function store (Request $request)
    {

      $brand= new brand ;
      $brand->name=$request->name;
      $brand->adress=$request->adress;
      $brand->phone=$request->phone;
      $brand->save();   
      return back();
    }
    public function index ()
    {

    	$brands =brand::all();
      return view ('brands.index' , compact('brands'));
    }
    public function destroy($id)
   {
     $brand=brand::find($id);
     $brand->delete();
     return back();
   }
    public function edit ($id)
{
	$brand= brand::find($id);
	return view ('brands.edit' ,compact('brand'));
}
public function update($id , Request $request)

{ 
      $brand= brand::find($id);
      $brand->name=$request->name;
      $brand->adress=$request->adress;
      $brand->phone=$request->phone;
	  $brand->save();  
	  return back (); 
}	  
}
