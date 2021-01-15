<?php

namespace App\Listeners;

use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Queue\InteractsWithQueue;
use Statamic\Events\SubmissionCreated;
use Illuminate\Support\Facades\Http;

class Subscribed
{
    public function handle(SubmissionCreated $event)
    {
        if($event->submission->form()->handle() === 'newsletter') {
            $email = $event->submission->data()['email'];
            $response = Http::withToken(config('services.mailcoach.token'))->post('https://mailcoach.sgdinstitute.org/api/email-lists/23/subscribers', ['email' => $email, 'tags' => ['website']]);
        }
    }
}
