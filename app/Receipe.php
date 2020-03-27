<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Receipe;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceipeStored;
use App\Events\ReceipeCreatedEvent;

class Receipe extends Model
{
    //

    protected $table= 'receipes';

    protected $fillable =['name' ,'ingredients','category','author_id']; 

    public function categories()
    {
        return $this->belongsTo(Category::class,'category');
    }

    public $dispatchesEvents = [
        'created' => ReceipeCreatedEvent::class
    ];

    protected static function boot()
    {
    	parent::boot();

    	static::created(function ($receipe){

    	session()->flash("message","Receipe has created successfully");

   		 
    	});
    }
}
