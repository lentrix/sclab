@extends('layouts.main')

@section('sidebar')

<div class="sidebar">
    <h2>Lab Test Menu</h2>
    <a href="{{url('/labs/create')}}">Create Lab Test</a>
    <a href="{{url('/labs/today')}}">Today's Lab Tests</a>
</div>

@stop

@section('content')

<div class="content">
    <h1>Results Entry: {{$labTest->template->name}} of {{$labTest->patient->fullname}}</h1>
    <?php $cat = ""; ?>

    <form action='{{url("/labs/$labTest->id/save-entry")}}' method="post">
        {{csrf_field()}}
        @foreach($labTest->orderedItems() as $item)

            @if($cat!=$item->category)
                <?php $cat = $item->category ?>
                <h3>{{$cat}}</h3>
            @endif

            <div class="lab-entry-row">
                <div class="lab-entry-item">
                    {{$item->name}}
                </div>
                <div class="lab-entry-item">
                    <pre style="margin:0">{{$item->normal}}</pre>
                </div>
                <div class="lab-entry-item">
                    <input type="text" name="value[{{$item->id}}]" value="{{$item->test_value}}" class="w3-input w3-border">
                </div>
            </div>

        @endforeach

            <div style="display: grid; grid-template-columns: repeat(3, 1fr); grid-gap:18px; margin-top: 18px">
                <div>
                    <label for="physician">Physician</label>
                    <input type="text" name="physician" class="w3-input w3-border" value={{$labTest->physician}}>
                </div>
                <div>
                    <label for="med_tech">Medical Technologist</label>
                    <input type="text" class="w3-input w3-border" name="med_tech" value={{$labTest->med_tech}}>
                </div>
                <div>
                    <label for="pathologist">Pathologist</label>
                    <input type="text" class="w3-input w3-border" name="pathologist" value={{$labTest->pathologist}}>
                </div>
            </div>
            <div>
                <label for="remarks">Remarks</label>
                <textarea name="remarks" rows="3" id="remarks" class="w3-input">{{$labTest->remarks}}</textarea>
            </div>

            <button type="submit" class="w3-button w3-teal w3-hover-green w3-right" style="margin-top: 18px">
                Submit Lab Results
            </button>

    </form>
</div>

@stop
