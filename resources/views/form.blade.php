<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Laravel Form</title>
</head>
<body>
    <h1>
        This Is Laravel Form !!
    </h1>
    <h3>Post Method</h3>
    <form action="formSubmit" method="post">
        {{@csrf_field()}}
        <input type="text" name="name"><br><br>
        <input type="submit" value="submit">
    </form>
    <br>
    <br>
    <h3>Get Method</h3>
    <form action="formSubmit" method="get">
        {{@csrf_field()}}
        <input type="text" name="name"><br><br>
        <input type="submit" value="submit">
    </form>
</body>
</html>