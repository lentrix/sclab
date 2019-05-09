@extends('layouts.main')

@section('sidebar')

    <div class="sidebar">
        <a href="{{url('/medicines')}}">Recent Medicines</a>
    </div>

@stop


@section('content')

<div class="content" style="padding-left: 100px">
    @include('flash')
    <h1>Create Medicine</h1>

    <div style="width: 500px">
        {!! Form::open(['method'=>'post', 'url'=>'/medicines']) !!}
        @include('medicines._form')
        {!! Form::close() !!}
    </div>
</div>

@stop
