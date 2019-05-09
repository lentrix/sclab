@extends('layouts.main')

@section('sidebar')

    <div class="sidebar">
        <h2>Medicine Menu</h2>
        <a href="{{url('/medicines')}}">Recent Medicines</a>
        <a href="{{url('/medicines/create')}}">Create New Medicine</a>
        <a href='{{url("/medicines/$medicine->id/edit")}}'>Update Medicine</a>
    </div>

@stop


@section('content')

<div class="content" style="padding-left: 100px">
    <h1>View Medicine</h1>
    <table class="w3-table w3-bordered" style="width: 600px">
        <tr>
            <th width="30%">Generic Name</th><td>{{$medicine->generic}}</td>
        </tr>
        <tr>
            <th width="30%">Brand</th><td>{{$medicine->brand}}</td>
        </tr>
        <tr>
            <th width="30%">Description</th><td>{{$medicine->description}}</td>
        </tr>
        <tr>
            <th width="30%">Price</th><td>{{money_format("PhP %i", $medicine->price)}}</td>
        </tr>
        <tr>
            <th width="30%">Qty Stock</th><td>{{$medicine->qty_stock}}</td>
        </tr>
    </table>
</div>

@stop
