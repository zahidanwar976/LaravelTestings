<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    //
    public function index(){
    	//echo "This is index mehtid of PagesController";
    	$title = "Welcome to Laravel Testing Home Page";
    	return view('pages.home',compact('title'));
    }
    public function about(){
    	$title = "Welcome to About Page";
    	return view('pages.about')->with('title',$title);
    }
    public function services(){
    	$data = array(
    		'title' => 'Welcome to Services Page',
    		'services' => ['C Language','Html','css','Php']

    	);
    	return view('pages.services')->with($data);
    }
    


    
}
