<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Report</title>
</head>
<body>
    
    <div>
        <table>
            <tbody>
                @foreach ($cpackages as $cpackage)
                    <tr>
                        <td>{{$cpackage->id}}</td>
                        <td>{{$cpackage->p_name}}</td>
                        <td>{{$cpackage->price}}</td>
                        <td>{{$cpackage->description}}</td>

                        <td><form action="/getPackage/{{$cpackage->id}}" method="GET"><input type="submit" value="Book"/></form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       
    </div>

</body>
</html>