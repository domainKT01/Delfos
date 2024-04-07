<?php

namespace App\Http\Controllers\clients;

use App\Http\Controllers\Controller;
use App\Models\clients\Clients;
use Illuminate\Http\Request;

class ClientsController extends Controller
{
    public function index()
    {
        $clients = Clients::orderBy('id', 'DESC')->get();

        return view('clients.index', compact('clients'));
    }

    public function create()
    {
        return view('clients.create');
    }

    public function store(Request $request)
    {
        $client = new Clients();

        $client->docType = $request->docType;
        $client->identification = $request->identification;
        $client->firstName = $request->firstName;
        $client->secondName = $request->secondName;
        $client->firstLastName = $request->firstLastName;
        $client->secondLastName = $request->secondLastName;
        $client->telephone = $request->telephone;
        $client->birthday = $request->birthday;
        $client->address = $request->address;

        $client->save();

        return redirect()->route('clients.index');
    }

    public function show($id)
    {
        $client = Clients::all();

        dd($client);
    }
}
