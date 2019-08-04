<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Urinalysis Result</title>
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
        .title {
            font-weight: bold;
            font-size: 11pt;
            text-align:center;
        }
    </style>
</head>
<body>
    <div style="margin: 20px">
        <img src="{{asset('images/banner.png')}}" style="width:100%" alt="Stars and Comet Medical Clinic and Laboratory">
        <h2 style="text-align: center; margin-bottom: 0px">Urinalysis</h2>
        <br><br>

        <div class="left">
            <strong>Name:</strong>
            <span class="underlined">{{$urinalysis->lab->patient->fullname}}</span> <br>
            <strong>Age:</strong>
            <span class="underlined">{{$urinalysis->lab->patient->bdate->age}}</span>
        </div>
        <div class="center">
            <br>
            <strong>Sex:</strong>
            <span class="underlined">{{$urinalysis->lab->patient->gender}}</span>
        </div>
        <div class="right">
            <strong>Date:</strong>
            <span class="underlined">{{$urinalysis->lab->date->toFormattedDateString()}}</span> <br>
            <strong>Physician:</strong>
            <span class="underlined">{{$urinalysis->lab->physician}}</span>
        </div>

        <table>
            <tr>
                <td colspan="2" class="title">
                    GROSS EXAMINATION
                </td>
                <td colspan="2" class="title">
                    MICROSCOPIC EXAMINATION
                </td>
            </tr>
            <tr>
                <td>Color:</td><td><strong>{{$urinalysis->color}}</strong></td>
                <td>Pus Cells:</td><td><strong>{{$urinalysis->pus_cells}}</strong></td>
            </tr>
            <tr>
                <td>Transparency:</td><td><strong>{{$urinalysis->transparency}}</strong></td>
                <td>RBC:</td><td><strong>{{$urinalysis->rbc}}</strong></td>
            </tr>
            <tr>
                <td colspan="2">&nbsp;</td>
                <td>Epithelial Cells:</td><td><strong>{{$urinalysis->epithelial_cells}}</strong></td>
            </tr>
            <tr>
                <td colspan="2" class="title">CASTS</td>
                <td>Yeast Cells:</td><td><strong>{{$urinalysis->yeast_cells}}</strong></td>
            </tr>
            <tr>
                <td>Coarsely Granular:</td><td><strong>{{$urinalysis->coarsely_granular}}</strong></td>
                <td>Cylindroids:</td><td><strong>{{$urinalysis->cylindroids}}</strong></td>
            </tr>
            <tr>
                <td>Finely Granular:</td><td><strong>{{$urinalysis->finely_granular}}</strong></td>
                <td>Mucus Threads:</td><td><strong>{{$urinalysis->mucus_threads}}</strong></td>
            </tr>
            <tr>
                <td>Hyaline:</td><td><strong>{{$urinalysis->hyaline}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Pus Cast:</td><td><strong>{{$urinalysis->pus_cast}}</strong></td>
                <td colspan="2" class="title">
                    CHEMICAL EXAMINATION
                </td>
            </tr>
            <tr>
                <td>Waxy Cast:</td><td><strong>{{$urinalysis->waxy_cast}}</strong></td>
                <td>PH:</td><td><strong>{{$urinalysis->ph}}</strong></td>
            </tr>
            <tr>
                <td>WBC Cast:</td><td><strong>{{$urinalysis->wbc_cast}}</strong></td>
                <td>Spec. Gravity:</td><td><strong>{{$urinalysis->spec_gravity}}</strong></td>
            </tr>
            <tr>
                <td colspan="2"></td>
                <td>Protein:</td><td><strong>{{$urinalysis->protein}}</strong></td>
            </tr>
            <tr>
                <td colspan="2" class="title">
                    CRYSTALS
                </td>
                <td>Glucose:</td><td><strong>{{$urinalysis->glucose}}</strong></td>
            </tr>
            <tr>
                <td>Ammonium Biurates:</td><td><strong>{{$urinalysis->ammonium_biurates}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Amorphus Urates:</td><td><strong>{{$urinalysis->amorphus_urates}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Amorphus Phosphates:</td><td><strong>{{$urinalysis->amorphus_phosphates}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Calcium Oxalates:</td><td><strong>{{$urinalysis->calcium_oxalates}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Triple Phosphates:</td><td><strong>{{$urinalysis->triple_phosphates}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Uric Acid:</td><td><strong>{{$urinalysis->uric_acid}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Cholesterole:</td><td><strong>{{$urinalysis->cholesterole}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Leucine Crystals:</td><td><strong>{{$urinalysis->leucine_crystals}}</strong></td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>Other Findings:</td><td><strong>{{$urinalysis->other_findings}}</strong></td>
                <td colspan="2"></td>
            </tr>
        </table>
        <p>
            <strong>Remarks: </strong> <u>{{$urinalysis->lab->remarks}}</u>
            <br><br>
        </p>

        <div class="left">
            <u><strong>{{$urinalysis->lab->medicalTechnologist->fullname}}</strong></u><br>
            Medical Technologist
        </div>

        <div class="center">&nbsp;</div>

        <div class="right">
            <u><strong>{{$urinalysis->lab->pathologist}}</strong></u><br>
            Pathologist
        </div>
    </div>
</body>
</html>