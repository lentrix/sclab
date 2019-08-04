@extends('layouts.main')

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
    <h1>Fecalysis Entry</h1>
    <p><strong>Patient:</strong> {{$patient->fullname}}</p>

    {!! Form::open(['url'=>"/patients/$patient->id/fecalysis", 'method'=>'post']) !!}

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
    
    <div style="display: grid; grid-template-columns: 1fr 2fr; grid-gap: 15px">
        <div>
            <h3>Gross Examination</h3>
            <table width="100%">
                <tr>
                    <td>{{Form::label('color')}}</td>
                    <td>{{Form::text('color', null, ['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('consistency')}}</td>
                    <td>{{Form::text('consistency', null, ['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('blood')}}</td>
                    <td>{{Form::text('blood', null, ['class'=>'w3-input'])}}</td>
                </tr>
                <tr>
                    <td>{{Form::label('mucos')}}</td>
                    <td>{{Form::text('mucos', null, ['class'=>'w3-input'])}}</td>
                </tr>
            </table>
        </div>
        <div>
            <h3>Microscopic Examination</h3>
            <div style="display: grid; grid-template-columns: 1fr 1fr; grid-gap: 15px">
                <div>
                    <table width="100%">
                        <tr>
                            <td>{{Form::label('ova','OVA', ['style'=>'font-weight: bold'])}}</td>
                            <td>{{Form::text('ova',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('ascaris')}}</td>
                            <td>{{Form::text('ascaris',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('trichuris')}}</td>
                            <td>{{Form::text('trichuris',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('hookworm')}}</td>
                            <td>{{Form::text('hookworm',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('others')}}</td>
                            <td>{{Form::text('others',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                {{Form::label('tfob','Test for occult blood',['style'=>'font-weight: bold'])}}
                            </td>
                        </tr>
                        <tr>
                            <td>&nbsp;</td>
                            <td>{{Form::text('tfob',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        
                    </table>
                </div>

                <div>
                    <table width="100%">
                        <tr>
                            <td>{{Form::label('entamoeba', 'Entamoeba', ['style'=>'font-weight: bold'])}}</td>
                            <td>{{Form::text('entamoeba',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('tropozoites')}}</td>
                            <td>{{Form::text('tropozoites',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('cysts')}}</td>
                            <td>{{Form::text('cysts',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('trichomonas')}}</td>
                            <td>{{Form::text('trichomonas',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('yeast_cells')}}</td>
                            <td>{{Form::text('yeast_cells',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('pus_cells')}}</td>
                            <td>{{Form::text('pus_cells',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('rbc')}}</td>
                            <td>{{Form::text('rbc',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('bacteria')}}</td>
                            <td>{{Form::text('bacteria',null,['class'=>'w3-input'])}}</td>
                        </tr>
                        <tr>
                            <td>{{Form::label('fat_globules')}}</td>
                            <td>{{Form::text('fat_globules',null,['class'=>'w3-input'])}}</td>
                        </tr>
                    </table>
                </div>
            </div>
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
