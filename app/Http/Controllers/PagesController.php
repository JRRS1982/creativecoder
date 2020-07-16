<?php

namespace App\Http\Controllers;

use App\About;
use App\Project;
use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function welcome()
    {
       $projects = Project::get();
        return view('pages/welcome', ['projects' => $projects]);
    }
    
    public function about()
    {
        $projects = Project::get();
        return view('pages/about', ['projects' => $projects]);
    }
    
    public function tools()
    {
        $projects = Project::get();
        return view('pages/tools', ['projects' => $projects]);
    }
}
