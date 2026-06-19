<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Find Mentors</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
.top-bar{
    background:#08142d;
    color:#fff;
    font-size:14px;
}

.top-bar a {
    color:#fff;
    text-decoration:none;
}

body{
    background:#f8f9fa;
}

.page-header{
    background:linear-gradient(rgba(8,20,45,.9),rgba(8,20,45,.9));
    color:white;
    padding:80px 0;
}

.mentor-card{
    border:none;
    border-radius:15px;
    overflow:hidden;
    transition:.3s;
}

.mentor-card:hover{
    transform:translateY(-8px);
    box-shadow:0 10px 25px rgba(0,0,0,.15);
}

.mentor-img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    margin:auto;
    margin-top:20px;
}

.skill-badge{
    margin:2px;
}

.stats-box{
    background:#08142d;
    color:white;
    border-radius:15px;
    padding:20px;
}
</style>
</head>
<body>

<!-- TOP BAR -->
<div class="top-bar py-2">
<div class="container d-flex justify-content-between">
<div>Email: alumni@college.edu</div>
<div>Hotline: +91 9876543210</div>
</div>
</div>

<!-- NAVBAR -->
<nav class="navbar navbar-expand-lg navbar-light bg-white shadow-sm sticky-top">
<div class="container">
<a class="navbar-brand fw-bold fs-3 text-primary" href="Untitled-1.html">AlumniConnect</a>
<button class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#menu">
<span class="navbar-toggler-icon"></span>
</button>
<div class="collapse navbar-collapse" id="menu">
<ul class="navbar-nav mx-auto">
<li class="nav-item"><a class="nav-link" href="Untitled-1.html">Home</a></li>
<li class="nav-item"><a class="nav-link" href="about.html">About</a></li>
<li class="nav-item"><a class="nav-link active" href="mentor.html">Mentors</a></li>
<li class="nav-item"><a class="nav-link" href="jobs.html">Jobs</a></li>
<li class="nav-item"><a class="nav-link" href="event.html">Events</a></li>
<li class="nav-item"><a class="nav-link" href="contact.html">Contact</a></li>
</ul>
<div>
<button class="btn btn-primary">Login</button>
<button class="btn btn-success">Signup</button>
</div>
</div>
</div>
</nav>

<!-- Header -->
<section class="page-header text-center">
    <div class="container">
        <h1 class="display-4 fw-bold">Find Alumni Mentors</h1>
        <p class="lead">
            Connect with experienced alumni for guidance,
            career growth, and networking opportunities.
        </p>
    </div>
</section>

<!-- Search -->
<section class="py-5">
<div class="container">

<div class="row mb-4">

<div class="col-md-8">
<input type="text"
class="form-control form-control-lg"
placeholder="Search by name, company, skill...">
</div>

<div class="col-md-4">
<select class="form-select form-select-lg">
<option>All Domains</option>
<option>Software Development</option>
<option>Data Science</option>
<option>Cyber Security</option>
<option>Cloud Computing</option>
<option>AI / ML</option>
</select>
</div>

</div>

<!-- Stats -->
<div class="row text-center mb-5">

<div class="col-md-3">
<div class="stats-box">
<h2>800+</h2>
<p>Mentors</p>
</div>
</div>

<div class="col-md-3">
<div class="stats-box">
<h2>1200+</h2>
<p>Sessions</p>
</div>
</div>

<div class="col-md-3">
<div class="stats-box">
<h2>300+</h2>
<p>Internships</p>
</div>
</div>

<div class="col-md-3">
<div class="stats-box">
<h2>95%</h2>
<p>Success Rate</p>
</div>
</div>

</div>

<!-- Mentor Cards -->
<div class="row g-4">

<!-- Mentor 1 -->
<div class="col-lg-4">
<div class="card mentor-card h-100">

<img src="SumanSir.jpeg"
class="mentor-img">

<div class="card-body text-center">

<h4>Suman Das</h4>

<p class="text-primary fw-bold">
Senior Software Engineer
</p>

<p>
Google | Batch 2018
</p>

<div class="mb-3">
<span class="badge bg-primary skill-badge">Java</span>
<span class="badge bg-success skill-badge">Spring Boot</span>
<span class="badge bg-info skill-badge">Cloud</span>
</div>

<p>
8+ years experience in backend development and cloud technologies.
</p>

<a href="mentorship.php"><button class="btn btn-primary">
Request Mentorship
</button></a>

</div>
</div>
</div>

<!-- Mentor 2 -->
<div class="col-lg-4">
<div class="card mentor-card h-100">

<img src="AbhraninSir.jpeg"
class="mentor-img">

<div class="card-body text-center">

<h4>Abhranin Mandal</h4>

<p class="text-success fw-bold">
Data Scientist
</p>

<p>
Microsoft | Batch 2000
</p>

<div class="mb-3">
<span class="badge bg-danger">Python</span>
<span class="badge bg-warning text-dark">Machine Learning</span>
<span class="badge bg-dark">AI</span>
</div>

<p>
Helping students build careers in Data Science and AI.
</p>

<a href="mentorship.php"><button class="btn btn-success">
Request Mentorship
</button></a>

</div>
</div>
</div>

<!-- Mentor 3 -->
<div class="col-lg-4">
<div class="card mentor-card h-100">

<img src="MadushreeMam.jpeg"
class="mentor-img">

<div class="card-body text-center">

<h4>Madhushree Das</h4>

<p class="text-danger fw-bold">
Cloud Architect
</p>

<p>
Amazon aws | Batch 2008
</p>

<div class="mb-3">
<span class="badge bg-secondary">AWS</span>
<span class="badge bg-info">DevOps</span>
<span class="badge bg-success">Docker</span>
</div>

<p>
Specialized in AWS architecture, DevOps, and deployment.
</p>

<a href="mentorship.php"><button class="btn btn-danger">
Request Mentorship
</button></a>

</div>
</div>
</div>

</div>

</div>
</section>

<!-- Mentorship Process -->
<section class="bg-light py-5">
<div class="container">

<h2 class="text-center mb-5">
How Mentorship Works
</h2>

<div class="row text-center">

<div class="col-md-3">
<h1>1️⃣</h1>
<h5>Find Mentor</h5>
<p>Search mentors based on skills and interests.</p>
</div>

<div class="col-md-3">
<h1>2️⃣</h1>
<h5>Send Request</h5>
<p>Request a mentorship session.</p>
</div>

<div class="col-md-3">
<h1>3️⃣</h1>
<h5>Schedule Meeting</h5>
<p>Choose a convenient date and time.</p>
</div>

<div class="col-md-3">
<h1>4️⃣</h1>
<h5>Learn & Grow</h5>
<p>Get guidance and career support.</p>
</div>

</div>

</div>
</section>

<!-- Footer -->
<footer class="bg-dark text-white py-5">
<div class="container">
<div class="row g-4 mb-4">

<!-- About -->
<div class="col-md-3">
<h5 class="fw-bold mb-3">About Us</h5>
<p>Alumni Connect bridges the gap between students and alumni through mentorship, networking, and career opportunities.</p>
<div class="mt-3">
<a href="#" class="text-white me-3" style="font-size:18px;">f</a>
<a href="#" class="text-white me-3" style="font-size:18px;">in</a>
<a href="#" class="text-white me-3" style="font-size:18px;">X</a>
<a href="#" class="text-white" style="font-size:18px;">▶</a>
</div>
</div>

<!-- Quick Links -->
<div class="col-md-3">
<h5 class="fw-bold mb-3">Quick Links</h5>
<ul class="list-unstyled">
<li><a href="about.html" class="text-white text-decoration-none">About</a></li>
<li><a href="mentor.html" class="text-white text-decoration-none">Find Mentors</a></li>
<li><a href="jobs.html" class="text-white text-decoration-none">Jobs</a></li>
<li><a href="event.html" class="text-white text-decoration-none">Events</a></li>
<li><a href="contact.html" class="text-white text-decoration-none">Contact</a></li>
</ul>
</div>

<!-- Support -->
<div class="col-md-3">
<h5 class="fw-bold mb-3">Support</h5>
<ul class="list-unstyled">
<li><a href="#" class="text-white text-decoration-none">Help Center</a></li>
<li><a href="#" class="text-white text-decoration-none">FAQs</a></li>
<li><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
<li><a href="#" class="text-white text-decoration-none">Terms & Conditions</a></li>
<li><a href="#" class="text-white text-decoration-none">Report Issue</a></li>
</ul>
</div>

<!-- Contact Info -->
<div class="col-md-3">
<h5 class="fw-bold mb-3">Contact</h5>
<p>📧 alumni@college.edu</p>
<p>📱 +91 9876543210</p>
<p>📍 ABC Engineering College<br>Chennai, India</p>
<p class="mt-3"><small>Mon-Fri: 9AM-5PM</small></p>
</div>

</div>

<hr class="bg-white">

<div class="row align-items-center">
<div class="col-md-6">
<p class="mb-0">© 2025 Alumni Connect. All rights reserved.</p>
</div>
<div class="col-md-6 text-md-end">
<small>Building Bridges Between Students and Alumni</small>
</div>
</div>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>