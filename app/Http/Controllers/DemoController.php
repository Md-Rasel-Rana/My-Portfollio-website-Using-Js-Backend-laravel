<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DemoController extends Controller
{
    public function index(){
        return view('pages.header');    
    }
    public function hero(){
        return view('pages.header');    
    }
    public function Aboutpage(){
        return view('pages.about');    
    }

}
