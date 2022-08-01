<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE-edge">
    <title>ADEASHOP|Regis</title>
    <link rel="stylesheet" href="style.css" media="screen" title="no title">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css">
    <style>
        body {
            margin: 0;
            padding: 0;
            background: #90caf9;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
            font-family: sans-serif;
        }

        .login {
            position: fixed;
            top: 50%;
            left: 45%;
            transform: translate(-30%, -50%);
            background: rgba(146, 69, 17, 0.226);
            padding: 50px;
            width: 400px;
            box-shadow: 0px 0px 25px 10px rgba(146, 69, 17, 0.979);
            border-radius: 15px;
        }

        .avatar {
            font-size: 30px;
            background: rgb(216, 158, 49);
            width: 50px;
            height: 50px;
            line-height: 50px;
            position: fixed;
            left: 50%;
            top: 0;
            transform: translate(-50%, -50%);
            text-align: center;
            border-radius: 50%;
        }

        .login h2 {
            text-align: center;
            color: white;
            font-size: 30px;
            font-family: sans-serif;
            letter-spacing: 3px;
            padding-top: 0;
            margin-top: -20px;
        }

        .box-login {
            display: flex;
            justify-content: space-between;
            margin: 10px;
            border-bottom: 2px solid white;
            padding: 8px 0;
        }

        .box-login i {
            font-size: 23px;
            color: white;
            padding: 5px 0;
        }

        .box-login input {
            width: 85%;
            padding: 5px 0;
            background: none;
            border: none;
            outline: none;
            color: white;
            font-size: 18px;
        }

        .box-login input::placeholder {
            color: white;
        }

        .btn-login .box-login input:hover {
            background: rgba(10, 10, 10, s 0.5);
        }

        .btn-login {
            margin-left: 10px;
            margin-bottom: 20px;
            background: none;
            border: 1px solid white;
            width: 92.5%;
            padding: 10px;
            color: white;
            font-size: 18px;
            letter-spacing: 3px;
            cursor: pointer;
        }

        .btn-login:hover {
            background: rgba(12, 30, 15, 0.5);
        }

        .bottom {
            margin-left: 10px;
            margin-right: 10px;
            display: flex;
            justify-content: space-between;
        }

        .bottom a {
            color: white;
            font-size: 15px;
            text-decoration: none;
        }

        .bottom a:hover {
            text-decoration: underline;
        }

        .container {
            width: 100%;
            height: 100vh;
            background-color: rgb(228, 173, 70);
            position: relative;
            overflow: hidden;
        }

        .bub {
            width: 130px;
            height: 130px;
            border: 1px solid white;
            box-shadow: inset 5px -5px 10px white;
            border-radius: 50%;
            background-color: rgb(216, 158, 49);
            backdrop-filter: blur(2px);
            position: absolute;
            bottom: -100px;
            /* animation: bubble 3s ease-in infinite; */
        }

        .bub::before {
            position: absolute;
            content: "";
            background-color: white;
            width: 20px;
            height: 20px;
            border-radius: 50%;
            top: 25px;
            right: 23px;
            box-shadow: 0px 0px 20px white;
        }

        .bub.a {
            left: 10%;
            animation: bubble2 2s ease-in 1s infinite;
        }

        .bub.b {
            left: 20%;
            animation: bubble 1.5s ease-in 1.4s infinite;
        }

        .bub.c {
            left: 28%;
            animation: bubble 5s ease-in 3.8s infinite;
        }

        .bub.d {
            left: 40%;
            animation: bubble 1.8s ease-in .5s infinite;
        }

        .bub.e {
            left: 75%;
            animation: bubble2 2.3s ease-in 2.5s infinite;
        }

        .bub.f {
            left: 90%;
            animation: bubble 2.5s ease-in 3s infinite;
        }

        .bub.g {
            left: 60%;
            animation: bubble 2.2s ease-in 2s infinite;
        }

        .bub.k {
            left: 50%;
            animation: bubble 1.6s ease-in 2s infinite;
        }

        .bub.i {
            left: 65%;
            animation: bubble2 1.8s ease-in 2.1s infinite;
        }

        .bub.j {
            left: 3%;
            animation: bubble 2s ease-in 1.5s infinite;
        }

        .bub.h {
            left: 35%;
            animation: bubble2 3s ease-in infinite;
        }

        @keyframes bubble {
            0% {
                opacity: 0;
            }
            10%,
            93% {
                opacity: 1;
            }
            100% {
                transform: translate(90px, -700px);
                display: none;
            }
        }

        @keyframes bubble2 {
            0% {
                opacity: 0;
            }
            10%,
            93% {
                opacity: 1;
            }
            100% {
                transform: translate(-90px, -700px);
                display: none;
            }
        }
    </style>


</head>

<body>
    <div class="container">
        <span class="bub a "></span>
        <span class="bub b "></span>
        <span class="bub c "></span>
        <span class="bub d"></span>
        <span class="bub e"></span>
        <span class="bub f"></span>
        <span class="bub g"></span>
        <span class="bub h"></span>
        <span class="bub i"></span>
        <span class="bub j "></span>
        <span class="bub k"></span>

    </div>
</body>

</html>
<div class="login">

    <div class="avatar">
        <i class="fa fa-user"></i>
    </div>

    <h2>Login Form</h2>
    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="box-login">
            <i class="fas fa-user"></i>
            <input id="name" type="text" placeholder="Name" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus> @error('name')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> @enderror
        </div>

        <div class="box-login">
            <i class="fas fa-envelope-open-text"></i>
            <input id="email" type="email" placeholder="Email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email"> @error('email')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> @enderror
        </div>

        <div class="box-login">
            <i class="fas fa-lock"></i>
            <input id="password" type="password" placeholder="Password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password"> @error('password')
            <span class="invalid-feedback" role="alert">
                <strong>{{ $message }}</strong>
            </span> @enderror
        </div>
        <div class="box-login">
            <i class="fas fa-user-lock"></i>
            <input id="password-confirm" type="password" placeholder="Confirm Password" class="form-control" name="password_confirmation" required autocomplete="new-password">
        </div>

        <div class="box-login">
            <i class="fas fa-user-shield"></i>

            <select name="is_admin" class="form-control" style="background-color: rgba(146, 69, 17, 0.226);border:none;color:white;">
                    <option value="KOSONG">Pilih Akses</option>
                    <option value="1" style="color:black">Admin</option>
                    <option value="0" style="color:black">Kasir</option>
                </select>

        </div>
        <button type="submit" name="register" class="btn-login">Regis</button>
        <div class="bottom">
            <a href="{{ route('login') }}">Sudah Punya Akun?</a>

        </div>
    </form>
</div>
