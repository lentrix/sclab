@extends('layouts.main')

@section('style')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    td {
        border: 1px solid #333;
        padding: 4px;
    }
</style>
@stop

@section('sidebar')

    <div class="sidebar">
        <h2>Patient Menu</h2>
        <a href="{{url('/patients/create')}}">Create New Patient</a>
        <a href="{{url('/patients/today')}}">Transacting Today</a>
        <a href='{{url("/patients/$patient->id/select-lab")}}'>New Lab Test</a>
        <a href='{{url("/patients/$patient->id/create-consultation")}}'>New Consultation</a>
        <a href="{{url('/patients/' . $patient->id . '/update')}}">Update Information</a>
    </div>

@stop

@section('content')

<div class="content">
    <h1>Hematology Entry</h1>
    <p><strong>Patient:</strong> {{$patient->fullname}}</p>

    {!! Form::open(['url'=>"/patients/$patient->id/hematology", 'method'=>'post']) !!}

    <div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap:15px">
        <p>
            {{Form::label('physician','Physician')}}
            {{Form::text('physician',null, ['class'=>'w3-input'])}}
        </p>
        <p>
            {{Form::label('pathologist','Pathologist')}}
            {{Form::text('pathologist',null, ['class'=>'w3-input'])}}
        </p>
    </div>

    <table>
        <tr><td colspan="6"><strong style="font-size: 1.2em">COMPLETE BLOOD COUNT</strong></td></tr>
        <tr>
            <td width="300">&nbsp;</td>
            <td colspan="3"><strong>NORMAL VALUES</strong></td>
            <td><strong>PATIENT'S RESULTS</strong></td>
        </tr>
        <tr>
            <td class="center">
                <strong>WBC</strong>
            </td>
            <td colspan="3">
                Newborn: 10.0-30.0 x10^9/L <br>
                1 year old: 6.0-17.0 x10^9/L <br>
                Adult: 4.5-11.0 x10^9/L
            </td>
            <td>
                {{Form::text('wbc',null,['class'=>'w3-input'])}}
            </td>
        </tr>
        <tr>
            <td class="center">
                <strong>RBC</strong>
            </td>
            <td colspan="3">
                Birth: 150-200 g/L   Female: 120-160 g/L <br>
                2 months: 90-140 g/L   Male: 130-180 g/L <br>
                10 years: 120-150 g/L
            </td>
            <td>
                {{Form::text('rbc',null,['class'=>'w3-input'])}}
            </td>
        </tr>
        
        <tr>
            <td class="center">
                <strong>Hemoglobin</strong>
            </td>
            <td colspan="3">
                Newborn: 5.0 - 6.5 x 10^12/L <br>
                1 year old: 3.5 - 5.1 x 10^12/L <br>
                Female: 3.6 - 5.6 x 10^12/L <br>
                Male: 4.2 - 6.0 x 10^12/L
            </td>
            <td>
                {{Form::text('hemoglobin',null,['class'=>'w3-input'])}}
            </td>
        </tr>

        <tr>
            <td class="center">
                <strong>Hematocrit</strong>
            </td>
            <td colspan="3">
                Birth: 0.45 - 0.60%    Female: 0.36 - 0.48% <br>
                1 year: 0.27 - 0.44%    Male: 0.40 - 0.55%
            </td>
            <td>
                {{Form::text('hematocrit',null,['class'=>'w3-input'])}}
            </td>
        </tr>

        <tr>
            <td class="center">
                <strong>Platelet</strong>
            </td>
            <td colspan="3">
                150 - 450 /cumm.
            </td>
            <td>
                {{Form::text('platelet',null,['class'=>'w3-input'])}}
            </td>
        </tr>

        <tr>
            <td class="center">
                <strong>Retic. Count</strong>
            </td>
            <td colspan="3">
                Newborn: 2.5 - 6.5%
            </td>
            <td>
                {{Form::text('retic_count',null,['class'=>'w3-input'])}}
            </td>
        </tr>

        <tr>
            <td class="center">
                <strong>ESR</strong>
            </td>
            <td colspan="3">
                Newborn: 0 - 2 mm/hr.  Female: 0 - 20 mm/hr. <br>
                Children: 3 - 13 mm/hr.   Male: 0 - 10 mm/hr.
            </td>
            <td>
                {{Form::text('esr',null,['class'=>'w3-input'])}}
            </td>
        </tr>
        
        <tr>
            <td><strong style="font-size: 1.2em">WBC Differential Count</strong></td>
            <td><strong>Adult</strong></td>
            <td><strong>0-6 mos.</strong></td>
            <td><strong>6-12 mos.</strong></td>
            <td>&nbsp;</td>
        </tr>
        <tr>
            <td>Stabs</td>
            <td class="center">0.01 - 0.04</td><td>&nbsp;</td><td>&nbsp;</td>
            <td>{{Form::text('stabs',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td>Segmenters</td>
            <td class="center">0.45 - 0.65</td><td class="center">0.28-0.38</td><td class="center">0.31-0.40</td>
            <td>{{Form::text('segmenters',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td>Lymphocytes</td>
            <td class="center">0.20 - 0.35</td><td class="center">0.62-0.72</td><td class="center">0.60-0.69</td>
            <td>{{Form::text('lymphocytes',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td>Monocytes</td>
            <td class="center">0.02 - 0.06</td><td class="center">&nbsp;</td><td class="center">&nbsp;</td>
            <td>{{Form::text('monocytes',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td>Eosinophils</td>
            <td class="center">0.02 - 0.04</td><td class="center">&nbsp;</td><td class="center">&nbsp;</td>
            <td>{{Form::text('eosinophils',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td>Basophils</td>
            <td class="center">0.00 - 0.01</td><td class="center">&nbsp;</td><td class="center">&nbsp;</td>
            <td>{{Form::text('basophils',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr><td colspan="6">&nbsp;</td></tr>
        <tr>
            <td>Clotting Time</td>
            <td colspan="5">{{Form::text('clotting_time',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td>Bleeding Time</td>
            <td colspan="5">{{Form::text('bleeding_time',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td>Clot Observation Time</td>
            <td colspan="5">{{Form::text('clot_observation_time',null,['class'=>'w3-input'])}}</td>
        </tr>
        <tr>
            <td><span style="font-size: 2.0em">Blood Type</span></td>
            <td colspan="5">{{Form::text('blood_type',null,['class'=>'w3-input'])}}</td>
        </tr>
    </table>

    <div style="display: grid; grid-template-columns: 2fr 1fr; grid-gap:15px">
        <p>
            {{Form::label('remarks','Remarks')}}
            {{Form::text('remarks',null, ['class'=>'w3-input'])}}
        </p>
        <p>
            {{Form::label('price','Price')}}
            {{Form::text('price',null, ['class'=>'w3-input'])}}
        </p>
    </div>

    <button class="w3-button w3-lg w3-teal w3-hover-yellow">Submit</button>

    {!! Form::close() !!}
</div>

@stop