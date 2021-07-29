<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <link rel="stylesheet" href="{{ URL::asset('css/main.css') }}" />

</head>

<body>

    <div class="login-box">
        <h2>Login</h2>
        @if(count($errors) > 0)
        <div class="alert alert-danger">
            @foreach($errors->all() as $error)
            <p>{{$error}}</p>
            @endforeach
        </div>
        @endif
        <form method="POST" action="{{route('Login')}}>
            <div class=" user-box">
            <input type="email" name="email" id="email">
            <label>Email</label>
    </div>
    <div class="user-box">
        <type="password" name="password" required autocomplete="new-password" id="password">
            <label>Password</label>
    </div>
    <button>
        Login
    </button>
    {{csrf_field() }}

    </form>
    </div>
</body>

</html>