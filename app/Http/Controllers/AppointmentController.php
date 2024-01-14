<?php

namespace App\Http\Controllers;

use App\Models\appointment;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class AppointmentController extends Controller
{
    public function store(Request $request)
    {
        var_dump($request);
        // $appointment = new appointment;
        // $appointment->name = $request->;
        // $appointment->save();


        // return redirect('/');

    }
}
