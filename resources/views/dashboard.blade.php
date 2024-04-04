@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <div class="container">
        <div class="card">
            <div class="card-heard">
                <div class="input-group mb-3 mt-3">
                    <input wire:model="search" class="form-control mt-2 ml-4 mr-4 "
                        placeholder="Type what you want to search for">
                    <div class="input-group-btn">
                        <button type="button" class="btn btn-outline-info btn-med mr-4 mt-2" data-toggle="modal"
                            data-target="#modal-center-create">Create
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@stop
