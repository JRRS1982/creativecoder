<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
        return view('welcome');
    }
    
    public function about()
    {
        return view('about');
    }
}
