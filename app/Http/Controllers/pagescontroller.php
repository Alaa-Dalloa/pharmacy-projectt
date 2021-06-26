<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catigory;
class pagescontroller extends Controller
{
    public function index()
    {
    $catigory= Catigory::where('name' , 'skin care')->with('products')->first();
    $catigory_2= Catigory::where('name' , 'midecin')->with('products')->first();

    return view ('index' , compact('catigory') , compact('catigory_2'));
    }   

    public function login()
    {
    return view ('auth.login');
    
    }  
    public function About()
    {
    return view ('About');
    
    }  


}
