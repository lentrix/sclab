@extends('layouts.main')

@section('sidebar')

@stop

@section('content')

<div class="login w3-pale-yellow w3-card-2">
    @include('flash')
    <h1 class="w3-text-blue-gray">User Login</h1>
    <form action="{{url('/login')}}" method="post">

        {{csrf_field()}}

        <label for="username" class="w3-text-dark-gray">Username</label>
        <input type="text" name="username" id="username" class="w3-input w3-border">

        <label for="password" class="w3-text-dark-gray">Password</label>
        <input type="password" name="password" id="password" class="w3-input w3-border">

        <p>
            <button type="submit" class="w3-button w3-teal w3-hover-light-green w3-right" style="width: 150px">
                Login
            </button>
        </p>

    </form>

</div>

@stop
