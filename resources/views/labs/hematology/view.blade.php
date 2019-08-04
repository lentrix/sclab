@extends('layouts.main')

@section('sidebar')

    <div class="sidebar">
        <h2>Patient Menu</h2>
        <a href='{{url("/patients/{$hematology->lab->patient->id}")}}'>Patient Record</a>
        <a href="{{url('/patients/create')}}">Create New Patient</a>
        <a href="{{url('/patients/today')}}">Transacting Today</a>
        <a href='{{url("/patients/{$hematology->lab->patient_id}/select-lab")}}'>New Lab Test</a>
        <a href='{{url("/patients/{$hematology->lab->patient_id}/create-consultation")}}'>New Consultation</a>
        <a href="{{url('/patients/' . $hematology->lab->patient_id . '/update')}}">Update Information</a>
    </div>

@stop

@section('content')

<div class="content">
    
    <embed src='{{url("labs/hematology/$hematology->id/result")}}' type="application/pdf" width="100%" height="600px" />

</div>

@stop