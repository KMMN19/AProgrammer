<?php

namespace App\Listeners;

use App\Events\ReceipeCreatedEvent;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Support\Facades\Mail;
use App\Mail\ReceipeStored;

class ReceipeCreatedListener
{
    /**
     * Create the event listener.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Handle the event.
     *
     * @param  ReceipeCreatedEvent  $event
     * @return void
     */
    public function handle(ReceipeCreatedEvent $event)
    {
        Mail::to('khinmohmohnaing98@gmail.com')->send(new ReceipeStored($event->receipe));
    }
}
