<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Fecalysis Result</title>
    <style>
        * {
            font-family: arial, helvetica, 'sans-serif';
        }
        table {
            width: 100%;
        }

        .title {
            font-weight: bold;
            font-size: 1.1em;
            text-align: center;
        }
        .right-td {
            text-align: right;
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
        <h2 style="text-align: center; margin-bottom: 0px">Fecalysis</h2>

        <div class="left">
            <strong>Name:</strong>
            <span class="underlined">{{$fecalysis->lab->patient->fullname}}</span> <br>
            <strong>Age:</strong>
            <span class="underlined">{{$fecalysis->lab->patient->bdate->age}}</span>
        </div>
        <div class="center">
            <br>
            <strong>Sex:</strong>
            <span class="underlined">{{$fecalysis->lab->patient->gender}}</span>
        </div>
        <div class="right">
            <strong>Date:</strong>
            <span class="underlined">{{$fecalysis->lab->date}}</span> <br>
            <strong>Physician:</strong>
            <span class="underlined">{{$fecalysis->lab->physician}}</span>
        </div>

        <table>
            <tr>
                <td colspan="3">
                    <p class="title">GROSS EXAMINATION</p>
                </td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Color: </td>
                <td><strong>{{$fecalysis->color}}</strong></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Consistency: </td>
                <td><strong>{{$fecalysis->consistency}}</strong></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Blood: </td>
                <td><strong>{{$fecalysis->blood}}</strong></td>
            </tr>
            <tr>
                <td>&nbsp;</td>
                <td>Mucos: </td>
                <td><strong>{{$fecalysis->mucos}}</strong></td>
            </tr>
            <tr>
                <td colspan="3"><p class="title">MICROSCOPIC EXAMINATION</p></td>
            </tr>
            <tr>
                <td class="right-td"><strong>OVA:</strong></td>
                <td colspan="2">{{$fecalysis->ova}}</td>
            </tr>
            <tr><td>&nbsp;</td><td>Ascaris:</td><td>{{$fecalysis->ascaris}}</td></tr>
            <tr><td>&nbsp;</td><td>Trichuris:</td><td>{{$fecalysis->trichuris}}</td></tr>
            <tr><td>&nbsp;</td><td>Hookworm:</td><td>{{$fecalysis->hookworm}}</td></tr>
            <tr><td>&nbsp;</td><td>Others:</td><td>{{$fecalysis->others}}</td></tr>
            <tr>
                <td class="right-td"><strong>Entamoeba:</strong></td>
                <td colspan="2">{{$fecalysis->entamoeba}}</td>
            </tr>
            <tr><td>&nbsp;</td><td>Tropozoites:</td><td>{{$fecalysis->tropozoites}}</td></tr>
            <tr><td>&nbsp;</td><td>Cysts:</td><td>{{$fecalysis->cysts}}</td></tr>
            <tr><td>&nbsp;</td><td>Trichomonas sp:</td><td>{{$fecalysis->trichomonas}}</td></tr>
            <tr><td>&nbsp;</td><td>Yeast Cells:</td><td>{{$fecalysis->yeast_cells}}</td></tr>
            <tr><td>&nbsp;</td><td>Pus Cells:</td><td>{{$fecalysis->puss_cells}}</td></tr>
            <tr><td>&nbsp;</td><td>RBC:</td><td>{{$fecalysis->rbc}}</td></tr>
            <tr><td>&nbsp;</td><td>Bacteria:</td><td>{{$fecalysis->bacteria}}</td></tr>
            <tr><td>&nbsp;</td><td>Fat globules:</td><td>{{$fecalysis->fat_globules}}</td></tr>
            <tr>
                <td class="right-td"><strong>Test for occult blood:</strong></td>
                <td colspan="2">{{$fecalysis->tfob}}</td>
            </tr>
        </table>
        <p style="padding-bottom: 20px">
            <strong>Remarks:</strong> <u>{{$fecalysis->lab->remarks}}</u>
        </p>

        <div class="left">
            <u><strong>{{$fecalysis->lab->medicalTechnologist->fullname}}</strong></u><br>
            Medical Technologist
        </div>

        <div class="center">&nbsp;</div>

        <div class="right">
            <u><strong>{{$fecalysis->lab->pathologist}}</strong></u><br>
            Pathologist
        </div>
    </div>
</body>
</html>