<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    //
    public function index()
    {	
    	$name = 'Home Page';
    	return view('home',compact('name'));
    } 

    public function PhpPage()
    {
    	$data = array(
		    	'frurit1' => 'apple',
		    	'frurit2' => 'orange',
		    	'frurit3' => 'stawberry',
		    	'frurit4' => 'lime',
    	);
    	return view('php',compact('data'));
    }

    public function JsPage()
    {
    	$data = array(
		    	'frurit1' => 'apple',
		    	'frurit2' => 'orange',
		    	'frurit3' => 'stawberry',
		    	'frurit4' => 'lime',
    	);
    	return view('php',compact('data'));
    }


}
