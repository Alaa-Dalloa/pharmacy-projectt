<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pharmacy;
class pharmaciescontroller extends Controller
{
    public function create ()
    {

    	   return view ('pharmacies.create');

    }
    public function store (Request $request)
    {
      $pharmacy= new pharmacy ;
      $pharmacy->name=$request->name;
      $pharmacy->adress=$request->adress;
      $pharmacy->email=$request->email;
      $pharmacy->about_us=$request->about_us; 
	  $pharmacy->save();   
      return back();

    }

    public function index ()
    {
      $pharmacies =pharmacy::all();
      return view ('pharmacies.index' , compact('pharmacies'));
    }
   public function destroy($id)
   {
     $pharmacy=pharmacy::find($id);
     $pharmacy->delete();
     return back();
   }
   public function edit ($id)
{
	$pharmacy= pharmacy::find($id);
	return view ('pharmacies.edit' ,compact('pharmacy'));
}
public function update($id , Request $request)

{ 
      $pharmacy= pharmacy::find($id);
      $pharmacy->name=$request->name;
      $pharmacy->adress=$request->adress;
      $pharmacy->email=$request->email;
      $pharmacy->about_us=$request->about_us; 
	    $pharmacy->save();   
      return back();

}

}

