<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class pagesController extends Controller
{
    public function index(){
        return view('pages.index'); 
    }

    public function about(){
        $title = "About Us page from Controller";
        $body = "This is the about Page";
        return view('pages.about', compact('title', 'body'));
    }

    public function users($id, $cop){
        $name = "Borel king - ".$id." COP- ".$cop;
        return view('pages.users', compact('name')); 
    }

}
