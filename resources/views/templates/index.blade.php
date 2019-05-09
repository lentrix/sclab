@extends('layouts.main')

@section('sidebar')

<div class="sidebar">
    <h2>Template Menu</h2>
    <a href="{{url('/templates/create')}}">Create New Lab Template</a>
    <a href="{{url('/templates/usage')}}">Usage Report</a>
</div>

@stop


@section('content')

<div class="content" style="padding-left: 100px">
    <h1>Lab Templates</h1>
    <table class="w3-table w3-bordered">
        <thead>
            <tr>
                <th>Name</th>
                <th>Price</th>
                <th>Remarks</th>
                <th>Items</th>
                <th>*</th>
            </tr>
        </thead>
        <tbody>
            @foreach($templates as $template)
            <tr>
                <td>{{$template->name}}</td>
                <td>{{money_format("PhP %i", $template->price)}}</td>
                <td>{{$template->remarks}}</td>
                <td>{{$template->itemCount}}</td>
                <td>
                    <a href='{{url("/templates/$template->id")}}'>
                        <i class="fa fa-edit"></i>
                    </a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@stop
