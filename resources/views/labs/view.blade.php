@extends('layouts.main')

@section('sidebar')

<div class="sidebar">
    <h2>Lab Test Menu</h2>
    <a href="{{url('/labs/create')}}">Create Lab Test</a>
    <a href="{{url('/labs/today')}}">Today's Lab Tests</a>
    <a href='{{url("/labs/$labTest->id/printable")}}' target="_blank">Printable Result</a>
</div>

@stop

@section('content')

<div class="content">
    <h1>Laboratory Results</h1>
    <div class="results">
        <img src="{{asset('images/banner.png')}}" width="100%" style="margin-bottom: 20px" />

        <table width="100%">
            <tr>
                <strong>Name:</strong> {{$labTest->patient->fullname}}
            </tr>
        </table>
    </div>
</div>

@stop
