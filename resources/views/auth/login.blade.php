<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('/template/assets/css/login.css')}}">
    <title>Login</title>
</head>
<body class="body">
    @if(session()->has('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
        @endif
        @error('error')
        <div class="alert alert-danger">
            {{ $message }}
        </div>
        @enderror
    <div class="wrapper">
        <form method="POST" action="{{ route('login') }}" class="login">
        @csrf
            <div class="img-logo">
                <img src="{{asset('/template/assets/images/logo-lg.png')}}" alt="" class="logo-large">
            </div>
            <p class="welcome">
                Welcome To E-Arsip
            </p>
            <div class="input">
                <div class="user">
                    <input type="text" placeholder="Username" name="email">
                </div>
                <div class="user">
                    <input type="text" placeholder="Password" name="password">
                </div>
            </div>
            <div class="button">
                <button class="submit">
                    <p class="login">Login</p>
                </button>
                <button class="submit">
                    <p class="login">Register</p>
                </button>
            </div>
        </form>
    </div>
</body>
</html>