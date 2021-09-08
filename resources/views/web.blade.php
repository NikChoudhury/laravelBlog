<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blade Tamplate</title>
</head>
<body>
    <h1>Blade Tamplate in Laravel</h1>
    @if(count($data)>0)
    <h2>Hello {{$data['name']}}</h2>
    @endif

    <h3>For loop in blade</h3>
    @for($i=0;$i<5;$i++)
        {{$i}} <br>
    @endfor    

    <h3>Foreach loop in blade</h3>
    @foreach($newdata as $list)
        {{$list}}
    @endforeach
</body>
</html>