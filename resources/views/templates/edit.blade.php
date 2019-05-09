@extends('layouts.main')

@section('sidebar')

<div class="sidebar">
    <h2>Template Menu</h2>
    <a href="{{url('/templates/create')}}">Create New Lab Template</a>
    <a href="{{url('/templates')}}">Lab Template</a>
    <a href="{{url('/templates/usage')}}">Usage Report</a>
</div>

@stop

@section('content')

<div class="content" style="padding-left: 100px;">
    <h1>Update Template</h1>

    <div style="width: 500px">
        {!! Form::model($template, ['method'=>'patch', 'url'=>"/templates/$template->id"]) !!}

        <p>
            {{Form::label('name','Lab Name')}}
            {{Form::text('name',null, ['class'=>'w3-input'])}}
        </p>

        <p>
            {{Form::label('price','Price')}}
            {{Form::text('price',null, ['class'=>'w3-input'])}}
        </p>

        <p>
            {{Form::label('remarks','Remarks')}}
            {{Form::text('remarks',null, ['class'=>'w3-input'])}}
        </p>

        <p>
            <button class="w3-btn w3-teal w3-hover-light-green w3-right">Submit</button>
        </p>

        {!! Form::close() !!}
    </div>
</div>

@stop
