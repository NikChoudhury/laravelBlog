<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
    <style>
        .error{
            color: red;
        }
    </style>
</head>
<body>
    <h1>Form Validation In Laravel</h1>
    <div class="container">
        <form action="formValidation" method="post">
        {{@csrf_field()}}
            <!-- In Laravel 8 we Can Use @csrf for Token -->
            <!-- @csrf -->
            <table>
                <tr>
                    <td>Name</td>
                    <td>
                        <input type="text" name="name" id="name">
                        <br>
                        <span class="error">
                            @error('name')
                                {{$message}}
                            @enderror
                        </span>
                    </td>
                </tr>    
                <tr>
                    <td>Email</td>
                    <td>
                        <input type="email" name="email" id="email">
                        <br>
                        @if($errors->has('email'))
                            <span class="error">{{ $errors->first('email') }}</span>
                        @endif
                        <!-- <span class="error">
                            @error('email')
                                {{$message}}
                            @enderror
                        </span> -->
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