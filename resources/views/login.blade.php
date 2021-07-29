<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register Page</title>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />

</head>

<body>

    <div class="login-box">
        <h2>Register Here</h2>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <form method="POST" action="{{route('Login')}}">
            <div class="user-box">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required autocomplete="new-password" id="password">
                <label for="password">Password</label>
            </div>
            <div style="display:flex; flex-direction:row; justify-content: space-between">
                <div>
                    <button>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Login
                    </button>
                </div>

            </div>
            {{csrf_field() }}
        </form>
        <div>
            <h4 style="color:white">Don't have an account ?</h4>
            <a href="{{route('RegisterPage')}}">
                <button style="height:30px;text-transform: none;padding:5px;width:
                    120px;color:#0A043C;font-size:15px;font-weight:bold">
                    Register Here
                </button>

            </a>
        </div>
    </div>
</body>

</html>