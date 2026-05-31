<!DOCTYPE html>
<html>
<head>
    <title>Register</title>

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
            background:#2563eb;
            color:#fff;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#1d4ed8;
        }

        .link{
            text-align:center;
            margin-top:15px;
        }

        a{
            text-decoration:none;
            color:#2563eb;
        }

        .error{
            color:red;
            font-size:14px;
            margin-top:5px;
        }
    </style>
</head>
<body>

<div class="card">

    <h2>Create Account</h2>

    <form method="POST" action="{{ route('register') }}">
        @csrf

        <div class="form-group">
            <input type="text" name="name" placeholder="Full Name" value="{{ old('name') }}">
            @error('name')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="email" name="email" placeholder="Email Address" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password" placeholder="Password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div class="form-group">
            <input type="password" name="password_confirmation" placeholder="Confirm Password">
        </div>

        <button type="submit">Register</button>

        <div class="link">
            Already have an account?
            <a href="{{ route('login') }}">Login</a>
        </div>
    </form>

</div>

</body>
</html>