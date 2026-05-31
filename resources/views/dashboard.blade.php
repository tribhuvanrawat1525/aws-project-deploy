<!DOCTYPE html>
<html>
<head>
    <title>Dashboard</title>

    <style>
        *{
            margin:0;
            padding:0;
            box-sizing:border-box;
            font-family:Arial,sans-serif;
        }

        body{
            background:#f4f6f9;
        }

        .navbar{
            background:#111827;
            color:white;
            padding:15px 30px;
            display:flex;
            justify-content:space-between;
            align-items:center;
        }

        .container{
            max-width:1000px;
            margin:40px auto;
            padding:0 20px;
        }

        .card{
            background:white;
            padding:30px;
            border-radius:10px;
            box-shadow:0 5px 15px rgba(0,0,0,.1);
        }

        .welcome{
            font-size:24px;
            margin-bottom:10px;
        }

        .email{
            color:#666;
            margin-bottom:20px;
        }

        button{
            background:#dc2626;
            color:white;
            border:none;
            padding:10px 20px;
            border-radius:5px;
            cursor:pointer;
        }

        button:hover{
            background:#b91c1c;
        }
    </style>
</head>
<body>

<div class="navbar">
    <h3>Laravel App</h3>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit">Logout</button>
    </form>
</div>

<div class="container">

    <div class="card">

        <div class="welcome">
            Welcome, {{ auth()->user()->name }}
        </div>

        <div class="email">
            {{ auth()->user()->email }}
        </div>

        <p>
            You are successfully logged in.
        </p>

    </div>

</div>

</body>
</html>