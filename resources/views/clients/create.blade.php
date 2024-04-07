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
            <div class="card_body">
                <form action="{{ route('clients.store') }}" method="POST">

                    @csrf

                    <div class="mt-4 ml-4 form-row">
                        <div class="form-group col-md-4 mr-2" id="select">

                            <div class="form-group">
                                <label><i class="text-danger">*</i>Document type</label>
                                <select wire:model="documenttype" name="docType" class="form-control" required>
                                    <option value="">Choosse documenttype </option>
                                    <option value="CC">CC - CITIZENSHIP CARD</option>
                                    <option value="CE">CE - FOREIGNER ID</option>
                                    <option value="PA">PA - PASSPORT</option>
                                    <option value="NUIP">NUIP - UNIQUE PERSONAL IDENTIFICATION NUMBER</option>
                                    <option value="PE">PE - SPECIAL RESIDENCE PERMIT</option>
                                </select>
                            </div>

                        </div>

                        <div class="form-group col-md-2" style="padding-top: 32px;">
                            <input type="text" name="identification" class="form-control" placeholder="Identification"
                                required>
                        </div>

                        <div class="form-group col-md-2" style="padding-top: 32px;">
                            <input type="text" name="firstName" class="form-control" placeholder="First Name" required>
                        </div>

                        <div class="form-group col-md-2" style="padding-top: 32px;">
                            <input type="text" name="secondName" class="form-control" placeholder="Second Name">
                        </div>
                    </div>

                    <div class="mt-4 ml-4 form-row">

                        <div class="form-group col-md-2">
                            <input type="text" name="firstLastName" class="form-control" placeholder="First LastName"
                                required>
                        </div>

                        <div class="form-group col-md-2">
                            <input type="text" name="seconLastName" class="form-control" placeholder="Second LastName">
                        </div>

                        <div class="form-group col-md-2">
                            <input type="text" name="telephone" class="form-control" placeholder="Telephone" required>
                        </div>

                        <div class="form-group col-md-4">
                            <input type="text" name="address" class="form-control" placeholder="Address" required>
                        </div>
                    </div>

                    <div class="mt-4 ml-4 form-row">

                        <div class="form-group col-md-2">
                            <div class="form-group">
                                <label><i class="text-danger">*</i>Birthday</label>
                                <input type="date" class="date" name="birthday" required>
                            </div>
                        </div>

                        <div class="form-group col-md-2" style="padding-top: 32px">
                            <button class="btn btn-outline-success" type="submit">
                                Save
                            </button>
                        </div>

                    </div>
                </form>

            </div>

        </div>

    @stop
