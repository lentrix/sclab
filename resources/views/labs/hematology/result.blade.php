<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Hematology Results</title>
    <style>
        * {
            font-family: arial, helvetica, 'sans-serif';
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td {
            border: 1px solid #333;
            font-size: 10pt;
        }

        td.center {
            text-align: center;
        }

        .right {
            display: inline-block;
            width: 33%;
            text-align: right;
        }

        .center {
            display: inline-block;
            width: 34%;
            text-align: center;
        }

        .left {
            display: inline-block;
            width: 33%;
            clear: left;
        }
    </style>
</head>
<body>
    <div style="margin: 20px">
        <img src="{{asset('images/banner.png')}}" style="width:100%" alt="Stars and Comet Medical Clinic and Laboratory">
        <h2 style="text-align: center; margin-bottom: 0px">Hematology</h2>

        <div class="left">
            <strong>Name:</strong>
            <span class="underlined">{{$hematology->lab->patient->fullname}}</span> <br>
            <strong>Age:</strong>
            <span class="underlined">{{$hematology->lab->patient->bdate->age}}</span>
        </div>
        <div class="center">
            <br>
            <strong>Sex:</strong>
            <span class="underlined">{{$hematology->lab->patient->gender}}</span>
        </div>
        <div class="right">
            <strong>Date:</strong>
            <span class="underlined">{{$hematology->lab->date}}</span> <br>
            <strong>Physician:</strong>
            <span class="underlined">{{$hematology->lab->physician}}</span>
        </div>

        <table>
            <tr>
                <td>&nbsp;</td>
                <td colspan="3"><strong>NORMAL VALUES</strong></td>
                <td><strong>RESULTS</strong></td>
            </tr>
            <tr>
                <td><strong>WBC</strong></td>
                <td colspan="3">
                    Newborn: 10.0-30.0 x10^9/L <br>
                    1 year old: 6.0-17.0 x10^9/L <br>
                    Adult: 4.5-11.0 x10^9/L
                </td>
                <td>{{$hematology->wbc}}</td>
            </tr>
            <tr>
                <td><strong>RBC</strong></td>
                <td colspan="3">
                    Newborn: 5.0 - 6.5 x 10^12/L <br>
                    1 year old: 3.5 - 5.1 x 10^12/L <br>
                    Female: 3.6 - 5.6 x 10^12/L <br>
                    Male: 4.2 - 6.0 x 10^12/L
                </td>
                <td>{{$hematology->rbc}}</td>
            </tr>
            <tr>
                <td><strong>Hemoglobin</strong></td>
                <td colspan="3">
                    Birth: 150-200 g/L         Female: 120-160 g/L <br>
                    2 months: 90-140 g/L    Male: 130-180 g/L <br>
                    10 years: 120-150 g/L
                </td>
                <td>{{$hematology->rbc}}</td>
            </tr>
            <tr>
                <td><strong>Hematocrit</strong></td>
                <td colspan="3">
                    Birth: 0.45 - 0.60%    Female: 0.36 - 0.48% <br>
                    1 year: 0.27 - 0.44%    Male: 0.40 - 0.55%
                </td>
                <td>{{$hematology->hematocrit}}</td>
            </tr>
            <tr>
                <td><strong>Platelet</strong></td>
                <td colspan="3">
                    150 - 450 /cumm.
                </td>
                <td>{{$hematology->hematocrit}}</td>
            </tr>
            <tr>
                <td><strong>Retic. Count</strong></td>
                <td colspan="3">
                    Newborn: 2.5 - 6.5%
                </td>
                <td>{{$hematology->retic_count}}</td>
            </tr>
            <tr>
                <td><strong>ESR</strong></td>
                <td colspan="3">
                    Newborn: 0 - 2 mm/hr.  Female: 0 - 20 mm/hr. <br>
                    Children: 3 - 13 mm/hr.   Male: 0 - 10 mm/hr.
                </td>
                <td>{{$hematology->esr}}</td>
            </tr>
            <tr style="font-weight: bold">
                <td>WBC Differential Count</td>
                <td>Adult</td>
                <td>0-6 mos.</td>
                <td>6-12 mos.</td>
                <td>&nbsp;</td>
            </tr>
            <tr>
                <td><strong>Stabs</strong></td>
                <td>0.01 - 0.04</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td>{{$hematology->stabs}}</td>
            </tr>
            <tr>
                <td><strong>Segmenters</strong></td>
                <td>0.45 - 0.65</td>
                <td>0.28-0.38</td>
                <td>0.31-0.40</td>
                <td>{{$hematology->segmenters}}</td>
            </tr>
            <tr>
                <td><strong>Lymphocytes</strong></td>
                <td>0.20 - 0.35</td>
                <td>0.62-0.72</td>
                <td>0.60-0.69</td>
                <td>{{$hematology->lymphocytes}}</td>
            </tr>
            <tr>
                <td><strong>Monocytes</strong></td>
                <td>0.02 - 0.06</td>
                <td></td>
                <td></td>
                <td>{{$hematology->monocytes}}</td>
            </tr>
            <tr>
                <td><strong>Eosinophils</strong></td>
                <td>0.02 - 0.04</td>
                <td></td>
                <td></td>
                <td>{{$hematology->eosinophils}}</td>
            </tr>
            <tr>
                <td><strong>Basophils</strong></td>
                <td>0.00 - 0.01</td>
                <td></td>
                <td></td>
                <td>{{$hematology->basophils}}</td>
            </tr>
            <tr>
                <td colspan="5">&nbsp;</td>
            </tr>
            <tr>
                <td>Clotting Time</td>
                <td colspan="4">
                    {{$hematology->clotting_time}}
                </td>
            </tr>
            <tr>
                <td>Bleeding Time</td>
                <td colspan="4">
                    {{$hematology->bleeding_time}}
                </td>
            </tr>
            <tr>
                <td>Clot Observation Time</td>
                <td colspan="4">
                    {{$hematology->clot_observation_time}}
                </td>
            </tr>
            <tr>
                <td><h3>Blood Type</h3></td>
                <td colspan="5">
                    <h3>{{$hematology->blood_type}}</h3>
                </td>
            </tr>
        </table>
        <p>
            <strong>Remarks: </strong> <u>{{$hematology->lab->remarks}}</u>
            <br><br>
        </p>

        <div class="left">
            <u><strong>{{$hematology->lab->medicalTechnologist->fullname}}</strong></u><br>
            Medical Technologist
        </div>

        <div class="center">&nbsp;</div>

        <div class="right">
            <u><strong>{{$hematology->lab->pathologist}}</strong></u><br>
            Pathologist
        </div>
    </div>
</body>
</html>