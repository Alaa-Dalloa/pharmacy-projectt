<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagescontroller extends Controller
{
    public function index(){
    return view ('index');
}
    public function about ()
    {

     return view ('about');
    }
    public function contact ()
    {

     return view ('contact');
    }
    public function welcome () 
    {

    	return view ('welcome');
    }
     public function thankyou () 
    {

    	return view ('thankyou');
    }
     public function cart () 
    {

    	return view ('cart');
    }
    
    public function home () 
    {

    	return view ('home');
    }

















}
