@extends('layouts.main')

@section('sidebar')

<div class="sidebar">
    <h2>Lab Test Menu</h2>
    <a href="{{url('/labs/create')}}">Create Lab Test</a>
    <a href="{{url('/labs/today')}}">Today's Lab Tests</a>
    <a href='{{url("/labs/$labTest->id/entry")}}'>Update Entries</a>
    <a href='{{url("/labs/$labTest->id/printable")}}' target="_blank">Printable Result</a>
</div>

@stop

@section('content')

<div class="content">
    <div style="width: calc(72px * 8.5); padding: 10px; border: 1px solid #cfcfcf">
        <img src="{{asset('images/banner.png')}}" width="100%" style="margin-bottom: 20px" />
        <h4 style="text-align:center">{{$labTest->template->name}}</h4>
        <table style="width: 100%">
            <tr>
                <td>
                    <strong>Name:</strong> {{$labTest->patient->fullname}}
                </td>
                <td>&nbsp;</td>
                <td style="text-align:right">
                    <strong>Date:</strong> {{$labTest->created_at->toFormattedDateString()}}
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Age:</strong> {{$labTest->patient->bdate->age}} years old
                </td>
                <td style="text-align:center">
                    <strong>Gender:</strong> <span style="text-transform: capitalize">{{$labTest->patient->gender}}</span>
                </td>
                <td style="text-align:right">
                    <strong>Physician: </strong> {{$labTest->physician}}
                </td>
            </tr>
        </table>
        <?php $cat = ""; ?>
        <table style="width: 100%; border-collapse: collapse;" border="1">
            @foreach($labTest->orderedItems() as $item)

                @if($cat!=$item->category)
                    <?php $cat = $item->category; ?>
                <tr>
                    <td colspan="3"><strong>{{$cat}}</strong></td>
                </tr>

                @endif

                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->normal}}</td>
                    <td>{{$item->test_value}}</td>
                </tr>

            @endforeach
        </table>
        <p>
            <strong>Remarks:</strong> <span style="border-bottom: 1px solid #333">{{$labTest->remarks}}</span>
        </p>
        <table style="margin-top: 20px; width: 100%">

            <tr>
                <td style="text-align:center; width: 40%">
                    {{$labTest->med_tech}}
                </td>
                <td>&nbsp;</td>
                <td style="text-align:center; width: 40%">
                    {{$labTest->pathologist}}
                </td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #333; text-align: center; font-weight:bold">Medical Technologist</td>
                <td>&nbsp;</td>
                <td style="border-top: 1px solid #333; text-align: center; font-weight:bold">Pathologist</td>
            </tr>
        </table>
    </div>
</div>

@stop
