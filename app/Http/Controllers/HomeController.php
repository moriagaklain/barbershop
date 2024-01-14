<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\service;
use App\Models\barber;
use App\Models\appointment;
use App\Models\User;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $barbers=barber::all();
        $services=service::all();
        return view('home', compact('barbers', 'services'));

    }

}
