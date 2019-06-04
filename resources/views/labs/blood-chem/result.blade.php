<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Blood Chemistry Result</title>
    <style>
        * {
            font-family: arial, helvetica, 'sans-serif';
        }
        table.results {
            border-collapse: collapse;
            width: 100%;
        }

        th, td {
            border: 1px solid #777;
        }
        td.underlined {
            border-bottom: 1px solid #777;
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

        .underlined {
            border-bottom: 1px solid #777;
        }
    </style>
</head>
<body>
    <div style="margin: 20px">
        <img src="{{asset('images/banner.png')}}" style="width:100%" alt="Stars and Comet Medical Clinic and Laboratory">
        <h2 style="text-align: center">Blood Chemistry</h2>
        
        <div class="left">
            <strong>Name:</strong>
            <span class="underlined">{{$bloodChemistry->lab->patient->fullname}}</span> <br>
            <strong>Age:</strong>
            <span class="underlined">{{$bloodChemistry->lab->patient->bdate->age}}</span>
        </div>
        <div class="center">
            <br>
            <strong>Sex:</strong>
            <span class="underlined">{{$bloodChemistry->lab->patient->gender}}</span>
        </div>
        <div class="right">
            <strong>Date:</strong>
            <span class="underlined">{{$bloodChemistry->lab->date}}</span> <br>
            <strong>Physician:</strong>
            <span class="underlined">{{$bloodChemistry->lab->physician}}</span>
        </div>

        <table class="results">
            <tr>
                <th>TEST</th>
                <th>NORMAL VALUES</th>
                <th>PATIENT RESULTS</th>
            </tr>
            
            <tr>
                <td>* FBS</td>
                <td>{{\App\BloodChemistry::NORMALS['fbs']}}</td>
                <td>{{$bloodChemistry->fbs}}</td>
            </tr>
            <tr>
                <td>* RBS/CBS</td>
                <td>{{\App\BloodChemistry::NORMALS['rbs_cbs']}}</td>
                <td>{{$bloodChemistry->rbs_cbs}}</td>
            </tr>
            <tr>
                <td>* 2HPRBS</td>
                <td>{{\App\BloodChemistry::NORMALS['hprbs']}}</td>
                <td>{{$bloodChemistry->hprbs}}</td>
            </tr>
            <tr>
                <td>* Creatinine</td>
                <td>{{\App\BloodChemistry::NORMALS['creatinine']}}</td>
                <td>{{$bloodChemistry->creatinine}}</td>
            </tr>
            <tr>
                <td>* Uric Acid</td>
                <td>{{\App\BloodChemistry::NORMALS['uric_acid']}}</td>
                <td>{{$bloodChemistry->uric_acid}}</td>
            </tr>
            <tr>
                <td>* Total Cholesterol</td>
                <td>{{\App\BloodChemistry::NORMALS['total_cholesterol']}}</td>
                <td>{{$bloodChemistry->total_cholesterol}}</td>
            </tr>
            <tr>
                <td>* Triglycerides</td>
                <td>{{\App\BloodChemistry::NORMALS['triglycerides']}}</td>
                <td>{{$bloodChemistry->triglycerides}}</td>
            </tr>
            <tr>
                <td>* HDL-C</td>
                <td>{{\App\BloodChemistry::NORMALS['hdl_c']}}</td>
                <td>{{$bloodChemistry->hdl_c}}</td>
            </tr>
            <tr>
                <td>* LDL-C</td>
                <td>{{\App\BloodChemistry::NORMALS['ldl_c']}}</td>
                <td>{{$bloodChemistry->ldl_c}}</td>
            </tr>
            <tr>
                <td>* VLDL</td>
                <td>{{\App\BloodChemistry::NORMALS['vldl']}}</td>
                <td>{{$bloodChemistry->vldl}}</td>
            </tr>
            <tr>
                <td>* SGOT (AST)</td>
                <td>{{\App\BloodChemistry::NORMALS['sgot']}}</td>
                <td>{{$bloodChemistry->sgot}}</td>
            </tr>
            <tr>
                <td>* SGPT (ALT)</td>
                <td>{{\App\BloodChemistry::NORMALS['sgpt']}}</td>
                <td>{{$bloodChemistry->sgpt}}</td>
            </tr>
            <tr>
                <td>* Sodium</td>
                <td>{{\App\BloodChemistry::NORMALS['sodium']}}</td>
                <td>{{$bloodChemistry->sodium}}</td>
            </tr>
            <tr>
                <td>* Potassium</td>
                <td>{{\App\BloodChemistry::NORMALS['potassium']}}</td>
                <td>{{$bloodChemistry->potassium}}</td>
            </tr>
            <tr>
                <td>* BUN</td>
                <td>{{\App\BloodChemistry::NORMALS['bun']}}</td>
                <td>{{$bloodChemistry->bun}}</td>
            </tr>
            
        </table>
        <p>
            <strong>REMARKS:</strong> 
            <u>{{$bloodChemistry->lab->remarks}}</u>
        </p><br><br>
        <div class="left">
            <u><strong>{{auth()->user()->fullname}}</strong></u><br>
            Medical Technologist
        </div>

        <div class="center">&nbsp;</div>

        <div class="right">
            <u><strong>{{$bloodChemistry->lab->pathologist}}</strong></u><br>
            Pathologist
        </div>
        
    </div>
</body>
</html>
    