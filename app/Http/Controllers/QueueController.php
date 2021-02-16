<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Queue;
use Illuminate\Support\Carbon;

class QueueController extends Controller
{
    public function index()
    {
        return view('queue');
        // Queue::create(['name'=>'test']);
        // (new SendEmailJob())->delay(Carbon::now()->addSeconds(3));
        // $test = (new \App\Jobs\TestJob())->delay(Carbon::now()->addSeconds(3));
        // dispatch($test);
        // // Mail::to('mail@appdividend.com')->send(new SendMailable());
        // echo 'Insert Queue';
    }
    public function setQueue(Request $request)
    {
        // dd(Carbon::parse($request->queue_time));
        $test = (new \App\Jobs\TestJob($request->queue_time))->delay(Carbon::parse($request->queue_time));
        dispatch($test);

        return redirect('/')->with('success','Insert Queue already '.Carbon::parse($request->queue_time)->format('d-m-y H:i:s'));
    }
}
