<?php

namespace App\Providers;

use App\Listeners\Subscribed;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Event;
use Statamic\Events\SubmissionCreated;

class EventServiceProvider extends ServiceProvider
{

    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
        SubmissionCreated::class => [
            Subscribed::class
        ]
    ];

    public function boot()
    {
        parent::boot();

        //
    }
}
