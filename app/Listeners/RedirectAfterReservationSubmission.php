<?php

namespace App\Listeners;

use Statamic\Events\FormSubmitted;
use Illuminate\Support\Facades\Redirect;

class RedirectAfterReservationSubmission
{
    public function handle(FormSubmitted $event)
    {
        $form = $event->submission->form();

        // Check if the form handle matches 'reservations'
        if ($form->handle() === 'reservations') {
            // Perform the redirect. Adjust the URL to your desired location.
            // Note: Direct redirects here won't work as expected due to the event system.
            // We'll use session flashing and handle the redirect elsewhere.
            session()->flash('redirectAfterReservation', '/thank-you');
        }
    }
}
