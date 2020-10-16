<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartering orders report</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!--styles-->
    <style>
        table,
        th,
        td {
            border: 2px solid #071a52;
            border-collapse: collapse;

        }
    </style>
</head>

<body>
    <br>
    <center>
        <h3 style="color:#071a52"> Yummy Hut - Catering Orders Details</h3>
    </center>
    
    <center>
    <a href="/download-corder" class="btn btn-danger" title="Download">Download</a>
    </center>
    <br>

    <center>
        <div>
            <table>
                <thead>
                    <tr>
                    <th>CustomerID</th>
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