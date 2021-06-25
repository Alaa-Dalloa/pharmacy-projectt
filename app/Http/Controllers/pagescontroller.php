<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Catigory ;

 


class pagescontroller extends Controller
{
    public function index()
    {
    return view ('index');
    }   

    public function login()
    {
    return view ('auth.login');
    
    }      


}
