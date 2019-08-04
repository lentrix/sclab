@extends('layouts.main')

@section('style')
<style>
    table {
        border-collapse: collapse;
        width: 100%;
    }
    td {
        padding: 2px 0;
    }

    .two-cols {
        display: grid;
        grid-template-columns: 1fr 1fr;
        grid-gap: 25px;
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

    <h1>Urinalysis Entry</h1>

    <p><strong>Patient:</strong> {{$patient->fullname}}</p>

    {!! Form::open(['url'=>"/patients/$patient->id/urinalysis", 'method'=>'post']) !!}

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

    <div class="two-cols">
    
        <div>
            <p><strong>GROSS EXAMINATION</strong></p>
            <table>
                <tr>
                    <td>Color:</td><td>{{Form::text('color',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Transparency:</td><td>{{Form::text('transparency',null,['class'=>'w3-input'])}}</td>
                </tr>
            </table>

            <p><strong>CHEMICAL EXAMINATION</strong></p>
            <table>
                <tr>
                    <td>PH:</td><td>{{Form::text('ph',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Spec. Gravity:</td><td>{{Form::text('spec_gravity',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Protein:</td><td>{{Form::text('protein',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Glucose:</td><td>{{Form::text('glucose',null,['class'=>'w3-input'])}}</td>
                </tr>
            </table>

            <p><strong>CRYSTALS</strong></p>
            <table>
                <tr>
                    <td>Ammonium Biurates:</td><td>{{Form::text('ammonium_biurates',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Amorphus Urates:</td><td>{{Form::text('amorphus_urates',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Amorphus Phosphates:</td><td>{{Form::text('amorphus_phosphates',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Calcium Oxalates:</td><td>{{Form::text('calcium_oxalates',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Triple Phosphates:</td><td>{{Form::text('triple_phosphates',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Uric Acid:</td><td>{{Form::text('uric_acid',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Cholesterol:</td><td>{{Form::text('cholesterole',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Leucine Crystals:</td><td>{{Form::text('leucine_crystals',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Other Findings:</td><td>{{Form::text('other_findings',null,['class'=>'w3-input'])}}</td>
                </tr>
            </table>
        </div>

        <div>
            <p><strong>MICROSCOPIC EXAMINATION</strong></p>
            <table>
                <tr>
                    <td>Pus Cells:</td><td>{{Form::text('pus_cells',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>RBC:</td><td>{{Form::text('rbc',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Epithelial Cells:</td><td>{{Form::text('epithelial_cells',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Yeast Cells:</td><td>{{Form::text('yeast_cells',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Cylindroids:</td><td>{{Form::text('cylindroids',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Mucus Threads:</td><td>{{Form::text('mucus_threads',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Bacteria:</td><td>{{Form::text('bacteria',null,['class'=>'w3-input'])}}</td>
                </tr>
            </table>

            <p><strong>CASTS</strong></p>
            <table>
                <tr>
                    <td>Corasely Granular:</td><td>{{Form::text('coarsely_granular',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Finely Granular:</td><td>{{Form::text('finely_granular',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Hyaline:</td><td>{{Form::text('hyaline',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Pus Cast:</td><td>{{Form::text('pus_cast',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>Waxy Cast:</td><td>{{Form::text('waxy_cast',null,['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>WBC Cast:</td><td>{{Form::text('wbc_cast',null,['class'=>'w3-input'])}}</td>
                </tr>
            </table>
        </div>

    </div>

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