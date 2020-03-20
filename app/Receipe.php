<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Receipe;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceipeStored;

class Receipe extends Model
{
    //

    protected $table= 'receipes';

    protected $fillable =['name' ,'ingredients','category','author_id']; 

    public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }

    protected static function boot()
    {
    	parent::boot();

    	static::created(function ($receipe){

    	session()->flash("message","Receipe has created successfully");

   		 Mail::to('khinmohmohnaing98@gmail.com')->send(new ReceipeStored($receipe));
    	});
    }
}
