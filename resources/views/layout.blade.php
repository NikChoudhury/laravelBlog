<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
</head>
<body>
    <header>
        <h2>Header Section</h2>
    </header>
    <div id="container">
        @section('container')
        <h2>Container Data</h2>
        @show
    </div>
    <footer>
        <h2>Footer Section</h2>
    </footer>
   
</body>
</html>