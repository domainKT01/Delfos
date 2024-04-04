<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $allClients = Clients::all();

        return view('clients.index', compact('allClients'));
    }

    public function store(Request $request)
    {
        $client = new Clients();
    }
}
