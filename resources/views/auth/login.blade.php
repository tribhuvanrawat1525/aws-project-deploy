<!DOCTYPE html>
<html>
<head>
    <title>Login</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            background:#f4f6f9;
            display:flex;
            justify-content:center;
            align-items:center;
            height:100vh;
        }

        .card{
            width:400px;
            background:#fff;
            padding:30px;
            border-radius:10px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }

        h2{
            text-align:center;
            margin-bottom:20px;
        }

        .form-group{
            margin-bottom:15px;
        }

        input{
            width:100%;
            padding:12px;
            border:1px solid #ddd;
            border-radius:5px;
        }

        button{
            width:100%;
            padding:12px;
            border:none;
            background:#16a34a;
            color:white;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#15803d;
        }

        .link{
            margin-top:15px;
            text-align:center;
        }

        a{
            text-decoration:none;
            color:#2563eb;
        }

        .error{
            color:red;
            margin-bottom:15px;
        }
    </style>
</head>
<body>

<div class="card">

    <h2>Login</h2>

    @if($errors->any())
        <div class="error">
            {{ $errors->first() }}
        </div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div class="form-group">
            <input type="email" name="email" placeholder="Email Address">
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password">
        </div>

        <button type="submit">Login</button>

        <div class="link">
            Don't have an account?
            <a href="{{ route('register') }}">Register</a>
        </div>
    </form>

</div>

</body>
</html>