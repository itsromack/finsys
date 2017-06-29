<?php

namespace ERC\Http\Controllers;

use Illuminate\Http\Request;
use ERC\Room;
use ERC\Booking;
use ERC\Client;

class DashboardController extends Controller
{
    public function index()
    {
        $clients = Client::all();
        $clients_count = Client::count();
        return view('dashboard', compact(
            'clients',
            'clients_count'
        ));
    }
}
