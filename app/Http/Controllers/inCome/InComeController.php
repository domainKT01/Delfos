<?php

namespace App\Http\Controllers\inCome;

use App\Http\Controllers\Controller;
use App\Models\clients\Clients;
use App\Models\income\InCome;
use App\Models\rooms\rooms;
use App\Models\status\status;
use Illuminate\Http\Request;

class InComeController extends Controller
{
    public function index()
    {
        $allInComes = InCome::orderBy('id', 'DESC')->get();

        return view('inCome.index', compact('allInComes'));
    }

    public function create_in(Request $request)
    {
        $client = Clients::where('id', $request->id)->first();

        $allRooms = rooms::where('id_status', status::where('status_name', 'active')->first()->id)->get();

        return view('inCome.create', compact('client', 'allRooms'));
    }

    public function store(Request $request)
    {
        $inCome = new InCome($request->all());

        $inCome->id_status = status::where('status_name', 'occupied')->first()->id;

        $inCome->save();

        return redirect()->route('inComes.index');
    }
}
