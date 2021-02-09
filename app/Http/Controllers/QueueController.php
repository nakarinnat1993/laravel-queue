<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queue;
use Illuminate\Support\Carbon;

class QueueController extends Controller
{
    public function index()
    {
        // Queue::create(['name'=>'test']);
        // (new SendEmailJob())->delay(Carbon::now()->addSeconds(3));
        $test = (new \App\Jobs\TestJob())->delay(Carbon::now()->addSeconds(3));
        dispatch($test);
        // Mail::to('mail@appdividend.com')->send(new SendMailable());
        echo 'Insert Queue';
    }
}
