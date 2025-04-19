<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ninjas</title>
</head>
<body>
   <h2>Available ninjas</h2> 

   <ul>
        @foreach($ninjas as $ninja)
            <li>
                <p> {{$ninja['name']}} </p>
                <a href="/ninjas/{{$ninja['id']}}">
                    View Details
                </a>
            </li> 
        @endforeach
   </ul>

</body>
</html>