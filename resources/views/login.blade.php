<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        .error{
            color: red;
        }
        .success{
            color: green;
        }
    </style>
</head>
<body>
    <h1>Login !!</h1>

    @if ($message = Session::get('error'))
        <div class="error">
                <strong>{{ $message }}</strong>
        </div>
    @endif
    <div class="container">
        <form action="userLoginSubmit" method="post" enctype="multipart/form-data">
        {{@csrf_field()}}
            <!-- In Laravel 8 we Can Use @csrf for Token -->
            <!-- @csrf -->
            <table>
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email">
                        <br>
                        @if($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>
                    <td>Password</td>
                    <td>
                        <input type="password" name="password" id="password">
                        <br>
                        @if($errors->has('password'))
                            <span class="error">{{ $errors->first('password') }}</span>
                        @endif
                    </td>
                </tr>
                <tr>    
                    <td></td>
                    <td><input type="submit" name="submit" id="submit"></td>
                </tr>    
            
            </table>
        </form>
    </div>
</body>
</html>