<?php

namespace App\Listeners;

use Statamic\Events\FormSubmitted;

class HandleFormSubmission
{
    public function handle(FormSubmitted $event)
    {
        $form = $event->submission->form();

        if ($form->handle() === 'reservations') {
            // Assuming 'charters' is the handle of your form
            session()->flash('success', 'Form submitted successfully.');

            // Redirect to a specific route
            return redirect()->route('submission.success');
        }
    }
}
