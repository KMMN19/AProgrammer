<?php

namespace App\Http\Controllers;

use App\Receipe;
use App\Category;
use App\test;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceipeStored;
use App\User;
use App\Notifications\ReceipeStoredNotification;
class ReceipeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        // $user =User::find(1); 
        // $user->notify(new ReceipeStoredNotification());

        // echo "sent notification";
        // exit(6);

        $data = Receipe::where('author_id', auth()->id())->paginate(3);
        return view('home',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category=Category::all();
        return view('create',compact('category'));

    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store()
    {
        $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',

    ]);

    $receipe = Receipe::create($validatedData + ['author_id' => auth()->id()]);

    return redirect('receipe');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function show(Receipe $receipe)
    {
        $this->authorize('view',$receipe);
        return view('show',compact('receipe'));
    }

    // public function show(test $test){
    
    // dd($test);

    // }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function edit(Receipe $receipe)
    {
        $this->authorize('view',$receipe);
        $category=Category::all();
        return view('edit',compact('receipe','category')); 
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function update(Receipe $receipe)
    {
        
        $this->authorize('view',$receipe);
        $validatedData = request()->validate([
        'name' => 'required',
        'ingredients' => 'required',
        'category' => 'required',

        ]);

        $receipe->update($validatedData);

        return redirect('receipe');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Receipes  $receipes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Receipe $receipe)
    {
        $this->authorize('view',$receipe);
        $receipe->delete();
        return redirect('receipe');   
    }
}
