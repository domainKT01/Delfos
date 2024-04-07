@extends('adminlte::page')

@section('title', 'Solproe')

@section('content_header')
    <h1>Orders List</h1>
@stop

@section('content')
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="container">

        <div class="card">

            <div class="card-heard">
                <div class="input-group mb-3 mt-3">
                    <input wire:model="search" class="form-control mt-2 ml-4 mr-4 "
                        placeholder="Type what you want to search for">
                    <div class="input-group-btn">
                        <a class="btn btn-outline-info btn-med mr-2 mt-2" href="{{ route('inComes.create') }}">Create</a>
                    </div>
                </div>
            </div>

            <div class="card-body">
                <table class="table table-striped table-bordered table-sm ">
                    <thead>
                        <tr>
                            <th class="text-center">First Name</th>
                            <th class="text-center">First LastName</th>
                            <th class="text-center">No. Room</th>
                            <th class="text-center">Type</th>
                            <th class="text-center" colspan="2">ACTION</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($allInComes as $inComes)
                            <tr>
                                <td class="text-center">{{ $inComes->clients->firstName }}</td>
                                <td class="col-sm-2 text-center" width="10px" class="text-left">
                                    {{ $inComes->clients->firstLastName }}
                                </td>
                                <td class="text-center">{{ $inComes->rooms->name }}</td>
                                <td class="text-center">{{ $inComes->rooms->type }}</td>
                                <td>
                                    <div>
                                        <form action="{{ route('inComes.create') }}" method="GET">
                                            <button class="text-center btn btn-outline-warning">
                                                Quit
                                            </button>
                                        </form>

                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@stop
