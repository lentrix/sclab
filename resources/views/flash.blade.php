@if(count($errors)>0)
<div class="w3-row flash-message">
    <div class="w3-mobile w3-panel w3-pale-red alert w3-animate-opacity w3-padding-16">
        @foreach($errors->all() as $error)
        <p>{{$error}}</p>
        @endforeach
    </div>
</div>
@endif


@if($message = Session::get('Success'))

<div class="w3-panel w3-pale-green alert w3-animate-opacity w3-padding-16 flash-message">
    {{$message}}
</div>

@endif

@if($message = Session::get('Error'))

<div class="w3-panel w3-pale-red alert w3-animate-opacity w3-padding-16 flash-message">
    {{$message}}
</div>

@endif
