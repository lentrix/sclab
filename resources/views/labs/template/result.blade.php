<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Title</title>
    <style>
        * {
            font-family: arial, helvetica, 'sans-serif';
        }
        .right {
            display: inline-block;
            width: 40%;
            text-align: right;
        }

        .center {
            display: inline-block;
            width: 20%;
            text-align: center;
        }

        .left {
            display: inline-block;
            width: 40%;
            clear: left;
        }    
    </style>
</head>
<body>
<div style="margin: 20px">
    <img src="{{asset('images/banner.png')}}" style="width:100%" alt="Stars and Comet Medical Clinic and Laboratory">
    <h2 style="text-align: center; margin-bottom: 0px; border-bottom: 1px solid #333">TITLE</h2>
    <h3 style="text-align: center; margin-bottom: 0px">Subtitle</h3>
    <br><br>
    <div class="left">
        <strong>Name:</strong>
        <span class="underlined">{{$xxx->lab->patient->fullname}}</span> <br>
        <strong>Age:</strong>
        <span class="underlined">{{$xxx->lab->patient->bdate->age}}</span>
    </div>
    <div class="center">
        <br>
        <strong>Sex:</strong>
        <span class="underlined">{{$xxx->lab->patient->gender}}</span>
    </div>
    <div class="right">
        <strong>Date:</strong>
        <span class="underlined">{{$xxx->lab->date->toFormattedDateString()}}</span> <br>
        <strong>Physician:</strong>
        <span class="underlined">{{$xxx->lab->physician}}</span>
    </div>

   <!-- Your contents here -->
   
    <div style="border-bottom: 1px solid #333">&nbsp;</div>
    <br><br><br>
    <div class="left">
        <u><strong>{{$xxx->lab->medicalTechnologist->fullname}}</strong></u><br>
        Medical Technologist
    </div>

    <div class="center">&nbsp;</div>

    <div class="right">
        <u><strong>{{$xxx->lab->pathologist}}</strong></u><br>
        Pathologist
    </div>
</div>
</body>
</html>