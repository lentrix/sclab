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
    <h1>Blood Chemistry Entry</h1>
    <p><strong>Patient:</strong> {{$patient->fullname}}</p>

    {!! Form::open(['url'=>"/patients/$patient->id/blood-chem", 'method'=>'post']) !!}
        {{Form::hidden('patient_id', $patient->id)}}

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
    
    <table class="w3-table w3-bordered">
        <thead>
            <tr>
                <th>Item</th>
                <th>Normal Values</th>
                <th>Patient Results</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>* FBS</td>
                <td>{{App\BloodChemistry::NORMALS['fbs']}}</td>
                <td>
                    {{Form::text('fbs',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* RBS/CBS</td>
                <td>{{App\BloodChemistry::NORMALS['rbs_cbs']}}</td>
                <td>
                    {{Form::text('rbs_cbs',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* 2HPRBS</td>
                <td>{{App\BloodChemistry::NORMALS['hprbs']}}</td>
                <td>
                    {{Form::text('hprbs',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* Creatinine</td>
                <td>{{App\BloodChemistry::NORMALS['creatinine']}}</td>
                <td>
                    {{Form::text('creatinine',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* Uric Acid</td>
                <td>{{App\BloodChemistry::NORMALS['uric_acid']}}</td>
                <td>
                    {{Form::text('uric_acid',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* Total Cholesterol</td>
                <td>{{App\BloodChemistry::NORMALS['total_cholesterol']}}</td>
                <td>
                    {{Form::text('total_cholesterol',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* Triglycerides</td>
                <td>{{App\BloodChemistry::NORMALS['triglycerides']}}</td>
                <td>
                    {{Form::text('triglycerides',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* HDL-C</td>
                <td>{{App\BloodChemistry::NORMALS['hdl_c']}}</td>
                <td>
                    {{Form::text('hdl_c',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* LDL-C</td>
                <td>{{App\BloodChemistry::NORMALS['ldl_c']}}</td>
                <td>
                    {{Form::text('ldl_c',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* VLDL</td>
                <td>{{App\BloodChemistry::NORMALS['vldl']}}</td>
                <td>
                    {{Form::text('vldl',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* SGOT(AST)</td>
                <td>{{App\BloodChemistry::NORMALS['sgot']}}</td>
                <td>
                    {{Form::text('sgot',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* SGPT(ALT)</td>
                <td>{{App\BloodChemistry::NORMALS['sgpt']}}</td>
                <td>
                    {{Form::text('sgpt',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* Sodium</td>
                <td>{{App\BloodChemistry::NORMALS['sodium']}}</td>
                <td>
                    {{Form::text('sodium',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* Potassium</td>
                <td>{{App\BloodChemistry::NORMALS['potassium']}}</td>
                <td>
                    {{Form::text('potassium',null,['class'=>'w3-input'])}}
                </td>
            </tr>
            <tr>
                <td>* BUN</td>
                <td>{{App\BloodChemistry::NORMALS['bun']}}</td>
                <td>
                    {{Form::text('bun',null,['class'=>'w3-input'])}}
                </td>
            </tr>
        </tbody>
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

    <button class="w3-button w3-lg w3-teal w3-hover-yellow w3-right">Submit</button>

    {!! Form::close() !!}
</div>

@stop

