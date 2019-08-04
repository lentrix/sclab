@extends('layouts.main')

@section('sidebar')
    <div class="sidebar">
        <h2>Patient Menu</h2>
        <a href="{{url('/patients/create')}}">Create New Patient</a>
        <a href="{{url('/patients/today')}}">Transacting Today</a>
        <a href='{{url("/patients/$patient->id/create-consultation")}}'>New Consultation</a>
        <a href="{{url('/patients/' . $patient->id . '/update')}}">Update Information</a>
    </div>
@stop


@section('content')

<div class="content">
    <h1>Select Lab Test</h1>
    <div class="subheading">
        Patient: {{$patient->fullname}}
    </div>
    <div class="blocks-container">
        
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/blood-chem")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Blood Chemistry</h3>
        </div>
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/fecalysis")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Fecalysis</h3>
        </div>
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/hematology")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Hematology</h3>
        </div>
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/urinalysis")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Urinalysis</h3>
        </div>
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/blood-typing")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Blood Typing</h3>
        </div>
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/dengue-duo")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Dengue Duo</h3>
        </div>
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/sputum")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Sputum</h3>
        </div>
        <div class="w3-card-2 w3-display-container" style="padding: 15px; background-color: white">
            <div class="w3-right">
                <a href='{{url("/patients/$patient->id/occult-blood")}}'
                        class="w3-button w3-teal w3-hover-green w3-display-topright">
                    Select
                </a>
            </div>
            <h3>Faecal Occult Blood Test</h3>
        </div>

    </div>
</div>

@stop
