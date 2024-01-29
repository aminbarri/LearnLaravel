<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StaticController extends Controller
{
   
    public function index(){
        return view('hello');
    }

    public function contact(){
        return view('contact');
    }
    public function home(){
        return view('home');
    }
}
