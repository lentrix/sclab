@extends('layouts.main')

@section('sidebar')
    <div class="sidebar">
        <h2>Patient Menu</h2>
        <a href="{{url('/patients/create')}}">Create New Patient</a>
        <a href="{{url('/patients/today')}}">Transacting Today</a>
        <a href='{{url("/patients/$patient->id/create-lab")}}'>New Lab Test</a>
        <a href='{{url("/patients/$patient->id/create-consultation")}}'>New Consultation</a>
        <a href='{{url("/patients/$patient->id/update")}}'>Update Information</a>
    </div>
@stop

@section('content')
<div class="content" style="padding-left: 100px;">
    @include('flash')
    <h1>Update Patient Information</h1>

    <div style="width: 600px">
    {!! Form::model($patient, ['method'=>'patch', 'url'=>"/patients/$patient->id"]) !!}
        @include('patients._form')
    {!! Form::close() !!}
    </div>
</div>
@stop
