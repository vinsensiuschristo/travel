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

    function carRental()
    {
        return view('carrental.index');
    }

    function contactUs()
    {
        return view('contactus.index');
    }

    function localDestination()
    {
        return view('localdestination.index');
    }

    function interDestination()
    {
        return view('interdestination.index');
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
