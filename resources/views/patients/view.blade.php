@extends('layouts.main')

@section('sidebar')
    <div class="sidebar">
        <h2>Patient Menu</h2>
        <a href="{{url('/patients/create')}}">Create New Patient</a>
        <a href="{{url('/patients/today')}}">Transacting Today</a>
        <a href='{{url("/patients/$patient->id/select-lab")}}'>New Lab Test</a>
        <a href='{{url("/patients/$patient->id/create-consultation")}}'>New Consultation</a>
        <a href="{{url('/patients/' . $patient->id . '/update')}}">Update Information</a>
    </div>
@stop


@section('content')

<div class="content">
    <h1>View Patient</h1>
    <div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 18px">
        <div style="grid-column: 1/2;">
            <h2>Patient Information</h2>
            <table class="w3-table w3-bordered">
                <tr>
                    <th width="25%">Name</th>
                    <td>{{$patient->fullname}}</td>
                </tr>
                <tr>
                    <th>Gender</th>
                    <td>{{$patient->gender}}</td>
                </tr>
                <tr>
                    <th>Birth Date</th>
                    <td>{{$patient->bdate->toFormattedDateString()}}</td>
                </tr>
                <tr>
                    <th>Age</th>
                    <td>{{$patient->bdate->age}}</td>
                </tr>
                <tr>
                    <th>Address</th>
                    <td>{{$patient->address}}</td>
                </tr>
                <tr>
                    <th>Phone</th>
                    <td>{{$patient->phone}}</td>
                </tr>
            </table>
        </div>

        <div style="grid-column: 2/-1">
            <h2>History</h2>
        </div>
    </div>
</div>

@stop
