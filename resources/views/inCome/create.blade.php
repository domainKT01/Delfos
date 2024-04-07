@extends('adminlte::page')

@section('title', 'clients')

@section('content_header')
    <h1>List Providers</h1>
@stop

@section('content')
    <div>
        @if ($errors->any())
            <div class="alert alert-danger">
                <h6>Please correct the following errors</h6>
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        <div class="card">
            <div class="mt-4 ml-4 card_header" style="font-family: 'Courier New', Courier, monospace">
                <p>{{ $client->identification . ' ' . $client->firstName . ' ' . $client->firstLastName }}</p>
            </div>
            <div class="card_body">
                <form action="{{ route('inComes.store') }}" method="POST">
                    @csrf

                    <div class="mt-4 ml-4 form-row">
                        <div class="form-group col-md-2 mr-2" id="select">

                            <div class="form-group">
                                <label><i class="text-danger">*</i>Rooms</label>
                                <select wire:model="documenttype" name="id_room" class="form-control" required>
                                    <option value="">Choosse Rooms </option>
                                    @foreach ($allRooms as $room)
                                        <option value="{{ $room->id }}"">{{ $room->name . ' ' . $room->type }}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                        <div class="form-group col-md-2" style="padding-top: 32px;">
                            <input type="text" name="from" class="form-control" placeholder="From" required>
                        </div>

                        <div class="form-group col-md-2" style="padding-top: 32px;">
                            <input type="text" name="to" class="form-control" placeholder="To" required>
                        </div>

                        <div class="form-group col-md-4" style="padding-top: 32px;">
                            <input type="text" name="requirements" class="form-control" placeholder="Requirements">
                        </div>
                    </div>


                    <div class="mt-4 ml-4 form-row">

                        <div class="form-group col-md-2">
                            <div class="form-group">
                                <label><i class="text-danger">*</i>Days</label>
                                <input type="number" class="days" name="days" placeholder="Days" required>
                            </div>
                        </div>

                        <div class="ml-4 form-group col-md-2" style="padding-top: 28px">
                            <button class="btn btn-outline-success" type="submit" name="id_client"
                                value="{{ $client->id }}">
                                Save
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>

    @stop
