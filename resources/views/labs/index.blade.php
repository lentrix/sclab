@extends('layouts.main')

@section('sidebar')
<div class="sidebar">
</div>
@stop

@section('content')

<div class="content">
    <h1>Recent Laboratories</h1>

    <table class="w3-table w3-bordered w3-striped">
        <thead>
            <tr>
                <th>Date</th>
                <th>Lab</th>
                <th>Patient</th>
                <th>Physician</th>
                <th>Medical Technologist</th>
                <th>...</th>
            </tr>
        </thead>
        <tbody>
        @foreach($labs as $lab)
            <tr>
                <td>{{$lab->date->toFormattedDateString()}}</td>
                <td>{{$lab->name}}</td>
                <td>{{$lab->patient->fullname}}</td>
                <td>{{$lab->physician}}</td>
                <td>{{$lab->medicalTechnologist->fullname}}</td>
                <td>
                    <a href="{{url($lab->slug)}}" class="w3-button w3-tiny w3-padding-small w3-blue-gray">
                        <i class="fa fa-ellipsis-h"></i>
                    </a>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
</div>

@stop