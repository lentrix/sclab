@extends('layouts.main')

@section('sidebar')
<div class="sidebar">
    <h2>Patient Menu</h2>
    <a href="{{url('/patients')}}">Recent Patients</a>
    <a href="{{url('/patients/today')}}">Transacting Today</a>
</div>
@stop

@section('content')

<div class="content" style="padding-left: 100px">

    @include('flash')

    <h1>Create Patient</h1>
    <div style="width: 500px;">
        {!! Form::model($patient, ['method'=>'post', 'url'=>'/patients'])  !!}
        @include('patients._form')
        {!! Form::close() !!}
    </div>
</div>

@stop
