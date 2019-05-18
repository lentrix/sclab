<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}">
    <link rel="stylesheet" href="{{asset('css/w3.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>
</head>
<body>

    <div class="main-container w3-card-4">

        <header class="w3-row w3-col m12 w3-blue-gray">
            <strong class="brand">{{env('APP_NAME')}}</strong>

            @include('nav')
        </header>

        @yield('sidebar')
        @yield('content')

        <footer class="w3-row w3-col m12 w3-dark-gray">
            Copyright &copy; 2019. <br>
            Stars and Comet Medical Clinic &amp; Laboratory<br>
            All rights reserved.
        </footer>
    </div>

</body>
</html>
