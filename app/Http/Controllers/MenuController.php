<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MenuController extends Controller
{
    function index()
    {
        return view('welcome');
    }
    function aboutUs()
    {
        return view('aboutus.index');
    }


    function contactUs()
    {
        return view('contactus.index');
    }

    function destination()
    {
        return view('destination.index');
    }

    function booking()
    {
        return view('booking.index');
    }

    function bogorWalkingTour()
    {
        return view('packetdetail.index');
    }
}
