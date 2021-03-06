<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cartering package Report</title>

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
        <h3 style="color:dark"> Yummy-Hut Catering Package Menu Details</h3>
    </center>
    <br>
    <center>
    <a href="/download-cpackage" class="btn btn-primary" title="Download report">Download</a>
    </center>
    <br>
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