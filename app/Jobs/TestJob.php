<?php

namespace App\Jobs;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use App\Queue;

class TestJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public $queue_time;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($queue_time)
    {
        $this->queue_time = $queue_time;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        Queue::create(['name'=>'test','queue_time'=>$this->queue_time]);
    }
}
