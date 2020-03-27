<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Receipe;
class PublicController extends Controller
{
    public function index()
    {
    	$receipes= Receipe::paginate(3);
    	return view('publicviews.public_welcome',compact('receipes'));
    }

    public function show($id)
    { 
    	$receipe=Receipe::find($id);
    	return view('publicviews.detail',compact('receipe'));
    }
}
