<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartering package Report</title>

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
        <h3 style="color:dark"> Yummy Hut - catering package detail</h3>
    </center>
    <br><br>

    <center>
        <div>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Package Name</th>
                        <th>Description</th>
                        <th>Unit Price</th>
                    </tr>
                </thead>
                <tbody>

                    @foreach($cpackages as $cpackage)
                    <tr>
                        <td>{{$cpackage->id}}</td>
                        <td>{{$cpackage->p_name}}</td>
                        <td>{{$cpackage->description}}</td>
                        <td>Rs.{{$cpackage->price}}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>


        </div>
    </center>
</body>

</html>