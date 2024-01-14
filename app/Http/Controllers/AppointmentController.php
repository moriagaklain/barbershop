<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        // var_dump($request->all());
        
         $appointment = new appointment;
         $appointment->customer_name = $request->name;
         $appointment->service_id = $request->service;
         $appointment->barber_id = $request->barber;
         $appointment->booking_schedule = $request->date;
         $appointment->save();


         return redirect('/');

    }
}
