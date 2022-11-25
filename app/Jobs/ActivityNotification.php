<?php

namespace App\Jobs;

use App\Models\Activity;
use Carbon\Carbon;
use GuzzleHttp\Exception\GuzzleException;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Pusher\ApiErrorException;
use Pusher\Pusher;
use Pusher\PusherException;

class ActivityNotification implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    public $activity;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $options = array(
            'cluster' => 'eu',
            'useTLS' => true
        );
        $pusher = new Pusher(
            'ea9500a9bd60caef42e3',
            '710bea10dde086e2d1b5',
            '1513630',
            $options
        );

        $data['message'] = 'hello world';
        try {

            $pusher->trigger('my-channel', 'my-event', $data);
        } catch (GuzzleException|ApiErrorException|PusherException $e) {
        }
//        foreach (Activity::all() as $activity)
//        {
//            if ($activity->is_completed != 1)
//            {
//                if (Carbon::now()->format('Y-m-d') === $activity->due_date )
//                {
//
//                }
//            }
//
//        }
    }
}
