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
                @foreach ($items as $item)
                    <tr>
                        <td>{{$item->id}}</td>
                        <td>{{$item->name}}</td>
                        <td>{{$item->type}}</td>
                        <td>{{$item->price}}</td>
                        <td>{{$item->description}}</td>

                        <td><form action="/getItem/{{$item->id}}" method="GET"><input type="submit" value="Take away"/></form></td>
                    </tr>
                @endforeach
            </tbody>
        </table>

       
    </div>

</body>
</html>