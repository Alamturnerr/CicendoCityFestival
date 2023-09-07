<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;

class EventController extends Controller
{
    public function home()
    {
        return view('home');
    }

    public function lineup()
    {
        // Get lineup data from the database using the Event model
        $lineup = Event::where('category', 'lineup')->get();
        return view('lineup', compact('lineup'));
    }

    public function gallery()
    {
        // Get gallery data from the database using the Event model
        $gallery = Event::where('category', 'gallery')->get();
        return view('gallery', compact('gallery'));
    }

    public function profile()
    {
        $profile = Event::where('category', 'profile')->get();
        return view('profile', compact('profile'));
    }

    public function ticket()
    {
        // Get ticket data from the database using the Event model (assuming the ticket data is in the same table)
        $tickets = Event::where('category', 'ticket')->get();
        return view('ticket', compact('tickets'));
    }



}
