<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" type="text/css" href="{{asset('/template/assets/css/register.css')}}">
    <title>Login</title>
</head>
<body class="body">
    @foreach ($errors->all() as $error)
        <strong>{{ $error }}</strong>
    @endforeach
    <div class="wrapper">
        <form action="/register/store" method="POST">
            @csrf
                <div class="logo">
                    {{-- <img src="{{asset('/template/assets/images/logo-lg.png')}}" alt="" class="logo-large">
                    <img src="{{asset('/template/assets/images/logo-jt.png')}}" alt="" class="logo-large"> --}}
                </div>
                <p class="welcome">
                    Welcome To E-Arsip
                </p>
                <div class="input">
                        {{-- <p class="label">Nama</p> --}}
                        <input type="text" placeholder="Nama" name="name" autofocus>
                        {{-- <p class="label">Email</p> --}}
                        <input type="text" placeholder="Email" name="email">
                        {{-- <p class="label">Password</p> --}}
                        <input type="password" placeholder="Password" name="password">
                </div>
                <div class="button">
                    <button class="submit">
                        <p class="login">Daftar</p>
                    </button>
                </div>
        </form>
    </div>
</body>
</html>
