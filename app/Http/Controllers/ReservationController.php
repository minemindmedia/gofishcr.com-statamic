<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class ReservationController extends Controller
{
    public function submit(Request $request)
    {
        // Handle your form submission logic here.
        // For example, saving form data to the database.

        // Check if the session has the 'redirectAfterReservation' key
        if (Session::has('redirectAfterReservation')) {
            // Clear the specific session storage after successful form submission
            Session::forget('redirectAfterReservation');

            // Optionally, redirect to a 'thank you' page or somewhere else
            return redirect()->to(Session::get('redirectAfterReservation'));
        }

        // Redirect back or to a default page if the session key is not set
        return redirect()->back();
    }
}
