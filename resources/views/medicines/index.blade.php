@extends('layouts.main')

@section('sidebar')

    <div class="sidebar">
        <h2>Medicine Menu</h2>
        <a href="{{url('/medicines/create')}}">Create New Medicine</a>
    </div>

@stop


@section('content')

<div class="content">
    <div class="search-box">
        <form action="{{url('/medicines')}}">
            <input type="text" name="filter" class="w3-input" style="width: 300px;" placeholder="Enter search key">
        </form>
    </div>

    <h1>Medicines</h1>
    <div class="subheading">
        {{$filter?"Search results for key: \"$filter\"":"Recent Access"}}
    </div>

    <table class="w3-table w3-bordered">
        <thead>
            <tr>
                <th>Generic</th>
                <th>Brand</th>
                <th>Description</th>
                <th>Qty in Stock</th>
                <th>*</th>
            </tr>
        </thead>

        <tbody>
            @foreach($medicines as $med)

            <tr>
                <td>{{$med->generic}}</td>
                <td>{{$med->brand}}</td>
                <td>{{$med->description}}</td>
                <td>{{$med->qty_stock}}</td>
                <td>
                    <a href='{{url("/medicines/$med->id")}}'
                        class="w3-button w3-tiny w3-padding-small w3-blue-gray">
                        <i class="fa fa-ellipsis-h"></i>
                    </a>
                </td>
            </tr>

            @endforeach
        </tbody>
    </table>
</div>

@stop
