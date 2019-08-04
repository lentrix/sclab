@extends('layouts.main')

@section('style')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    td {
        padding: 2px 0;
    }

    .two-cols {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 25px;
    }
</style>
@stop

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

    <h1>SEROLOGY</h1>
    <h3>Examination Desired: Blood Typing</h3>

    <p><strong>Patient:</strong> {{$patient->fullname}}</p>

    {!! Form::open(['url'=>"/patients/$patient->id/blood-typing", 'method'=>'post']) !!}

    <div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap:15px">
        <p>
            {{Form::label('physician','Physician')}}
            {{Form::text('physician',null, ['class'=>'w3-input'])}}
        </p>
        <p>
            {{Form::label('pathologist','Pathologist')}}
            {{Form::text('pathologist',null, ['class'=>'w3-input'])}}
        </p>
        <p>
            {{Form::label('blood_type','Blood Type')}}
            {{Form::text('blood_type',null, ['class'=>'w3-input'])}}
        </p>
    </div>

    <div style="display: grid; grid-template-columns: 2fr 1fr; grid-gap:15px">
        <p>
            {{Form::label('remarks','Remarks')}}
            {{Form::text('remarks',null, ['class'=>'w3-input'])}}
        </p>
        <p>
            {{Form::label('price','Price')}}
            {{Form::text('price',null, ['class'=>'w3-input'])}}
        </p>
    </div>

    <button class="w3-button w3-lg w3-teal w3-hover-yellow">Submit</button>


    {!! Form::close() !!}

</div>
@stop