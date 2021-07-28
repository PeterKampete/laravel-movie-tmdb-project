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
        <form method="POST" action="{{route('Register')}}">
            <div class="user-box">
                <input type="text" name="username" autocomplete="username" id="username">
                <label for="username">Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" id="email">
                <label for="email">Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required autocomplete="new-password" id="password">
                <label for="password">Password</label>
            </div>
            <button type="submit">

                <a href="#">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    Register
                </a>
            </button>
            {{csrf_field() }}
        </form>
    </div>
</body>

</html>