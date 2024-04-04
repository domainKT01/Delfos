<?php

namespace App\Http\Controllers\rooms;

use App\Http\Controllers\Controller;
use App\Models\rooms\rooms;
use App\Models\status\status;
use Illuminate\Http\Request;

class RoomsController extends Controller
{
    public function index()
    {
        $allRooms = rooms::all();

        return view('rooms.index', compact('allRooms'));
    }

    public function store(Request $request)
    {
        $room = new rooms();

        $room->name = $request->name;

        $room->id_status = status::where('status_name', 'active')->first()->id;

        $room->save();

        return redirect()->route('rooms.index');
    }
}
