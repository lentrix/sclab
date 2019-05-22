<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laboratory Result</title>
</head>
<body>
    <div style="width: 100%; padding: 10px; border: 1px solid #cfcfcf">
        <img src="{{asset('images/banner.png')}}" width="100%" style="margin-bottom: 20px" />
        <h2 style="text-align:center">{{$labTest->template->name}}</h2>
        <table style="width: 100%">
            <tr>
                <td>
                    <strong>Name:</strong> {{$labTest->patient->fullname}}
                </td>
                <td>&nbsp;</td>
                <td style="text-align:right">
                    <strong>Date:</strong> {{$labTest->created_at->toFormattedDateString()}}
                </td>
            </tr>
            <tr>
                <td>
                    <strong>Age:</strong> {{$labTest->patient->bdate->age}} years old
                </td>
                <td style="text-align:center">
                    <strong>Gender:</strong> <span style="text-transform: capitalize">{{$labTest->patient->gender}}</span>
                </td>
                <td style="text-align:right">
                    <strong>Physician: </strong> {{$labTest->physician}}
                </td>
            </tr>
        </table>
        <?php $cat = ""; ?>
        <table style="width: 100%; border-collapse: collapse;" border="1">
            @foreach($labTest->orderedItems() as $item)

                @if($cat!=$item->category)
                    <?php $cat = $item->category; ?>
                <tr>
                    <td colspan="3"><strong>{{$cat}}</strong></td>
                </tr>

                @endif

                <tr>
                    <td>{{$item->name}}</td>
                    <td>{{$item->normal}}</td>
                    <td>{{$item->test_value}}</td>
                </tr>

            @endforeach
        </table>
        <p>
            <strong>Remarks:</strong> <span style="border-bottom: 1px solid #333">{{$labTest->remarks}}</span>
        </p>
        <table style="margin-top: 20px; width: 100%">

            <tr>
                <td style="text-align:center; width: 40%">
                    {{$labTest->med_tech}}
                </td>
                <td>&nbsp;</td>
                <td style="text-align:center; width: 40%">
                    {{$labTest->pathologist}}
                </td>
            </tr>
            <tr>
                <td style="border-top: 1px solid #333; text-align: center; font-weight:bold">Medical Technologist</td>
                <td>&nbsp;</td>
                <td style="border-top: 1px solid #333; text-align: center; font-weight:bold">Pathologist</td>
            </tr>
        </table>
    </div>
</body>
</html>
