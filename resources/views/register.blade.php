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
        <form method="POST">
            <div class="user-box">
                <input type="text" name="username" :value="old('username')" autocomplete="username">
                <label value="{{ __('Username') }}">Username</label>
            </div>
            <div class="user-box">
                <input type="email" name="email" :value="old('email')">
                <label value="{{ __('Email') }}">Email</label>
            </div>
            <div class="user-box">
                <input type="password" name="password" required autocomplete="new-password">
                <label value="{{ __('Password') }}">Password</label>
            </div>
            <div style="flex-direction:row">
                <div>
                    <a href="#">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        Register
                    </a>

                </div>

                <div class="flex items-center justify-end mt-4">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900" href="#">
                        {{ __('Already registered?') }}
                    </a>

                    <x-jet-button class="ml-4">
                        {{ __('Register') }}
                    </x-jet-button>
                </div>
            </div>
        </form>
    </div>
</body>

</html>