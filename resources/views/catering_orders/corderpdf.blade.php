<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartering order report</title>

    <!--styles-->
    <style>
        table,
        th,
        td {
            border: 2px solid green;
            border-collapse: collapse;

        }
    </style>
</head>

<body>
    <br>
    <center>
        <h3 style="color:dark"> Yummy Hut - catering report detail</h3>
    </center>
    <br><br>

    <center>
        <div>
            <table>
                <thead>
                    <tr>
                    <th>CID</th>
                    <th>Package</th>
                    <th>Date & Time</th>
                    <th>Location</th>
                    <th>Guests</th>
                    <th>Bill-amount</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($corders as $corder)
                    <tr>
                    <td>{{$corder->customer_id}}</td>
                    <td>{{$corder->name}}</td>
                    <td>{{$corder->date_time}}</td>
                    <td>{{$corder->location}}</td>
                    <td>{{$corder->guests}}</td>
                    <td>Rs.{{$corder->amount}}.00</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </center>
</body>

</html>