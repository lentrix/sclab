@extends('layouts.main')

@section('sidebar')
    <div class="sidebar">
        <h2>Patient Menu</h2>
        <a href="{{url('/patients/create')}}">Create New Patient</a>
        <a href="{{url('/patients/today')}}">Transacting Today</a>
        <a href='{{url("/patients/$patient->id/create-lab")}}'>New Lab Test</a>
        <a href='{{url("/patients/$patient->id/create-consultation")}}'>New Consultation</a>
        <a href="{{url('/patients/' . $patient->id . '/update')}}">Update Information</a>
    </div>
@stop


@section('content')

<div class="content">
    <h1>Select Lab Test</h1>
    <div class="subheading">
        Patient: {{$patient->fullname}}
    </div>
    <div class="blocks-container">
        @foreach($templates as $template)

        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/$template->id")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-bottomright">
                    Select
                </a>
            </div>
            <h3>{{$template->name}}</h3>
            <p>{{$template->remarks}}</p>
            <div class="w3-left">
                <h2>{{money_format("PhP %i", $template->price)}}</h2>
            </div>

        </div>

        @endforeach
    </div>
</div>

@stop
