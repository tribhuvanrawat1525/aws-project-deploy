<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>AWS Laravel Deployment</title>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    background:#f8fafc;
    color:#1f2937;
}

/* Navbar */

.navbar{
    background:#0f172a;
    position:sticky;
    top:0;
    z-index:1000;
}

.logo{
    font-size:24px;
    font-weight:bold;
}

.nav-links a{
    color:white;
    text-decoration:none;
    margin-left:20px;
}

.btn{
    background:#2563eb;
    padding:10px 18px;
    border-radius:6px;
}

/* Hero */

.hero{
    min-height:85vh;
    display:flex;
    align-items:center;
    justify-content:center;
    text-align:center;
    padding:40px;
}

.hero-content{
    max-width:900px;
}

.hero h1{
    font-size:60px;
    margin-bottom:20px;
}

.hero p{
    font-size:22px;
    color:#6b7280;
    margin-bottom:35px;
}

.hero-buttons a{
    display:inline-block;
    padding:15px 25px;
    border-radius:8px;
    text-decoration:none;
    margin:10px;
    font-weight:bold;
}

.primary{
    background:#2563eb;
    color:white;
}

.secondary{
    border:2px solid #2563eb;
    color:#2563eb;
}

/* Features */

.features{
    padding:80px;
}

.section-title{
    text-align:center;
    font-size:38px;
    margin-bottom:50px;
}

.feature-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:25px;
}

.card{
    background:white;
    padding:30px;
    border-radius:12px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.card h3{
    margin-bottom:15px;
}

/* AWS Section */

.aws-section{
    background:#111827;
    color:white;
    padding:80px;
    text-align:center;
}

.aws-section h2{
    margin-bottom:20px;
    font-size:40px;
}

.aws-section p{
    max-width:700px;
    margin:auto;
    color:#d1d5db;
}

/* Footer */

.footer{
    text-align:center;
    padding:25px;
    background:#0f172a;
    color:white;
}

.badge{
    display:inline-block;
    padding:10px 18px;
    background:#dbeafe;
    color:#1d4ed8;
    border-radius:50px;
    font-size:14px;
    font-weight:bold;
    margin-bottom:20px;
}

.hero{
    min-height:90vh;
    background:linear-gradient(
        135deg,
        #0f172a,
        #1e293b,
        #2563eb
    );
    color:white;
}

.hero p{
    color:#cbd5e1;
}
.stats{
    background:#ffffff;
    padding:80px;
    display:grid;
    grid-template-columns:repeat(4,1fr);
    gap:30px;
    text-align:center;
}

.stats h2{
    color:#2563eb;
    font-size:42px;
    margin-bottom:10px;
}
.card{
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
}

.primary,
.secondary,
.btn{
    transition:.3s;
}

.primary:hover,
.btn:hover{
    transform:translateY(-2px);
}
</style>
</head>
<body>

<nav class="navbar">

    <div class="logo">
        AWS Laravel App
    </div>

    <div class="nav-links">

        <a href="/">Home</a>

        @guest
            <a href="{{ route('login') }}">Login</a>
            <a href="{{ route('register') }}" class="btn">Register</a>
        @endguest

        @auth
            <a href="{{ route('dashboard') }}" class="btn">
                Dashboard
            </a>
        @endauth

    </div>

</nav>

<section class="hero">

    <div class="hero-content">

    <div class="badge">
        🚀 Laravel 13 • AWS Cloud • Production Ready
    </div>

    <h1>
        Deploy Laravel Applications
        <br>
        Seamlessly on AWS
    </h1>

    <p>
        Experience a modern Laravel application hosted on AWS infrastructure,
        featuring secure authentication, scalable cloud architecture,
        automated deployments, and enterprise-grade reliability.
    </p>

        <div class="hero-buttons">

            @guest
                <a href="{{ route('register') }}" class="primary">
                    Get Started
                </a>

                <a href="{{ route('login') }}" class="secondary">
                    Sign In
                </a>
            @endguest

            @auth
                <a href="{{ route('dashboard') }}" class="primary">
                    Go To Dashboard
                </a>
            @endauth

        </div>

    </div>

</section>

{{-- <section class="features">

    <h2 class="section-title">
        Features
    </h2>

    <div class="feature-grid">

        <div class="card">
            <h3>Laravel 13</h3>
            <p>
                Built using the latest Laravel framework with modern architecture.
            </p>
        </div>

        <div class="card">
            <h3>Authentication</h3>
            <p>
                Secure user registration, login, session management and protected routes.
            </p>
        </div>

        <div class="card">
            <h3>AWS EC2</h3>
            <p>
                Hosted on Amazon EC2 with Apache, PHP and optimized server configuration.
            </p>
        </div>

        <div class="card">
            <h3>Database Ready</h3>
            <p>
                Supports MySQL, RDS and scalable cloud database solutions.
            </p>
        </div>

        <div class="card">
            <h3>CI/CD Ready</h3>
            <p>
                Easily integrate GitHub Actions for automatic deployment.
            </p>
        </div>

        <div class="card">
            <h3>Production Ready</h3>
            <p>
                Designed for real-world deployment and future scaling.
            </p>
        </div>

    </div>

</section> --}}

<section class="features">

    <h2 class="section-title">
        AWS Services Used
    </h2>

    <div class="feature-grid">

        <div class="card">
            <h3>☁️ Amazon EC2</h3>
            <p>
                Secure and scalable cloud hosting for Laravel applications.
            </p>
        </div>

        <div class="card">
            <h3>🗄️ Amazon RDS</h3>
            <p>
                Managed relational databases with backups and monitoring.
            </p>
        </div>

        <div class="card">
            <h3>📦 Amazon S3</h3>
            <p>
                Reliable object storage for files, images and backups.
            </p>
        </div>

        <div class="card">
            <h3>📊 CloudWatch</h3>
            <p>
                Monitoring, logs and performance tracking.
            </p>
        </div>

    </div>

</section>

<section class="aws-section">

    <h2>
        Cloud Powered by AWS
    </h2>

    <p>
        This project demonstrates a complete Laravel deployment workflow on AWS including EC2 hosting, database integration, authentication, deployment automation and cloud best practices.
    </p>

</section>
<section class="stats">

    <div>
        <h2>99.9%</h2>
        <p>Availability</p>
    </div>

    <div>
        <h2>100%</h2>
        <p>Secure Authentication</p>
    </div>

    <div>
        <h2>AWS</h2>
        <p>Cloud Hosted</p>
    </div>

    <div>
        <h2>Laravel 13</h2>
        <p>Latest Framework</p>
    </div>

</section>
<section class="aws-section">

    <h2>
        Ready to Explore the Platform?
    </h2>

    <p>
        Register today and experience a production-ready Laravel application
        running on AWS cloud infrastructure.
    </p>

    <br><br>

    @guest
        <a href="{{ route('register') }}" class="primary">
            Create Free Account
        </a>
    @endguest

</section>
<footer class="footer">
    © {{ date('Y') }} AWS Laravel Project | Built with Laravel & AWS
</footer>

</body>
</html>