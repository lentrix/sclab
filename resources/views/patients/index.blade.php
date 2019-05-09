@extends('layouts.main')

@section('sidebar')

<div class="sidebar">
    <h2>Patient Menu</h2>
    <a href="{{url('/patients/create')}}">Create a Patient</a>
    <a href="{{url('/patients/today')}}">Transacting Today</a>
</div>

@stop

@section('content')
<div class="content">
    <div class="search-box">
        <form action="{{url('/patients')}}">
            <input type="text" name="filter" class="w3-input" style="width: 300px;" placeholder="Enter search key">
        </form>
    </div>
    <h1>Patients</h1>

    <div class="subheading">
        {{$filter?"Search results for key: \"$filter\"":"Recent Access"}}
    </div>

    <table class="w3-table w3-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Address</th>
                <th>Gender</th>
                <th>Age</th>
                <th>*</th>
            </tr>
        </thead>
        <tbody>
            @foreach($patients as $patient)
                <tr>
                    <td>{{$patient->fullname}}</td>
                    <td>{{$patient->address}}</td>
                    <td>{{$patient->gender}}</td>
                    <td>{{$patient->bdate->age}}</td>
                    <td>
                        <a href='{{url("/patients/$patient->id")}}'
                            class="w3-button w3-tiny w3-padding-small w3-blue-gray">
                            <i class="fa fa-ellipsis-h"></i>
                        </a>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

@stop
index
