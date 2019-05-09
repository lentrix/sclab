@extends('layouts.main')

@section('sidebar')

    <div class="sidebar">
        <a href="{{url('/medicines')}}">Recent Medicines</a>
        <a href="{{url('/medicines/create')}}">Create New Medicine</a>
    </div>

@stop


@section('content')

<div class="content" style="padding-left: 100px">

    <h1>Update Medicine</h1>
    <div style="width: 500px">
        {!! Form::model($medicine, ['method'=>'patch', 'url'=>"/medicines/$medicine->id"]) !!}

        @include('medicines._form')

        {!! Form::close() !!}
    </div>
</div>

@stop
