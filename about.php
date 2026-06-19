<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>About Us - Alumni Connect</title>

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

/* Navbar */

.navbar{

background:#08192d!important;

padding:15px 0;

box-shadow:0px 5px 20px rgba(0,150,255,.15);

}

.navbar-brand{

color:#55d9ff!important;

font-size:30px;

font-weight:700;

letter-spacing:1px;

}

.nav-link{

color:white!important;

margin-left:15px;

transition:.3s;

font-weight:500;

}

.nav-link:hover{

color:#55d9ff!important;

}

.navbar-brand img{
    filter: drop-shadow(0px 0px 6px #55d9ff);
}

.signup-btn{

background:#00bfff;

color:white!important;

padding:10px 25px;

border-radius:30px;

text-decoration:none;

font-weight:600;

transition:.3s;

}

.signup-btn:hover{

background:#009acd;

transform:translateY(-2px);

}

.about-banner{
    background: linear-gradient(rgba(8,20,45,.85),rgba(8,20,45,.85)),
    url('https://images.unsplash.com/photo-1523050854058-8df90110c9f1');
    background-size: cover;
    background-position: center;
    color: white;
    padding: 100px 0;
}

.icon-box{
    background:#fff;
    border-radius:15px;
    padding:30px;
    box-shadow:0 5px 20px rgba(0,0,0,.1);
    transition:.3s;
}

.icon-box:hover{
    transform:translateY(-8px);
}

.value-card{
    background:#08142d;
    color:white;
    border-radius:15px;
    padding:30px;
    height:100%;
}
</style>
</head>
<body>
<?php
session_start();
?>
<?php  include('nav.php');   ?>  

<!-- About Banner -->
<section class="about-banner text-center">
    <div class="container">
        <h1 class="display-3 fw-bold">About Us</h1>
        <p class="lead">
            Building Bridges Between Students and Alumni
        </p>
    </div>
</section>

<!-- About Content -->
<section class="py-5">
    <div class="container">

        <div class="row align-items-center">

            <div class="col-lg-6">
                <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f"
                     class="img-fluid rounded shadow"
                     alt="Students">
            </div>

            <div class="col-lg-6">

                <h2 class="fw-bold mb-4">
                    Alumni Connect & Opportunity Exchange
                </h2>

                <p>
                    Alumni Connect is a platform designed to strengthen the
                    relationship between students and alumni. It enables
                    mentorship, networking, internship opportunities,
                    career guidance, and professional collaboration.
                </p>

                <p>
                    Our goal is to create a thriving ecosystem where alumni
                    can give back to their institution while helping students
                    achieve their academic and professional aspirations.
                </p>

            </div>

        </div>

    </div>
</section>

<!-- Mission Vision -->
<section class="bg-light py-5">
<div class="container">

<div class="row g-4">

<div class="col-md-4">
<div class="icon-box text-center">
<h3 class="text-primary">🎯 Mission</h3>
<p>
Foster mentorship, knowledge sharing, and career growth
through meaningful alumni-student connections.
</p>
</div>
</div>

<div class="col-md-4">
<div class="icon-box text-center">
<h3 class="text-success">👁 Vision</h3>
<p>
Build a lifelong alumni ecosystem that empowers future
generations through collaboration and support.
</p>
</div>
</div>

<div class="col-md-4">
<div class="icon-box text-center">
<h3 class="text-danger">🤝 Goal</h3>
<p>
Create opportunities for internships, jobs, networking,
and professional development.
</p>
</div>
</div>

</div>

</div>
</section>

<!-- Core Values -->
<section class="py-5">
<div class="container">

<div class="text-center mb-5">
<h2 class="fw-bold">Our Core Values</h2>
</div>

<div class="row g-4">

<div class="col-md-3">
<div class="value-card text-center">
<h4>Community</h4>
<p>Building strong lifelong relationships.</p>
</div>
</div>

<div class="col-md-3">
<div class="value-card text-center">
<h4>Mentorship</h4>
<p>Guiding students toward successful careers.</p>
</div>
</div>

<div class="col-md-3">
<div class="value-card text-center">
<h4>Innovation</h4>
<p>Encouraging new ideas and collaboration.</p>
</div>
</div>

<div class="col-md-3">
<div class="value-card text-center">
<h4>Growth</h4>
<p>Supporting professional and personal development.</p>
</div>
</div>

</div>

</div>
</section>

<!-- Statistics -->
<section class="bg-primary text-white py-5">
<div class="container">

<div class="row text-center">

<div class="col-md-3">
<h1>5000+</h1>
<p>Registered Alumni</p>
</div>

<div class="col-md-3">
<h1>2000+</h1>
<p>Students Connected</p>
</div>

<div class="col-md-3">
<h1>800+</h1>
<p>Mentors Available</p>
</div>

<div class="col-md-3">
<h1>300+</h1>
<p>Jobs & Internships</p>
</div>

</div>

</div>
</section>

<!-- Team Section -->
<section class="py-5">
<div class="container">

<div class="text-center mb-5">
<h2 class="fw-bold">Project Team</h2>
<p>Meet the innovators behind Alumni Connect.</p>
</div>

<div class="row g-4">

<div class="col-md-4">
<div class="card shadow text-center">
<div class="card-body">
    
<h4>Team Member 1</h4>
<p>Frontend Developer</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow text-center">
<div class="card-body">
<h4>Team Member 2</h4>
<p>Backend Developer</p>
</div>
</div>
</div>

<div class="col-md-4">
<div class="card shadow text-center">
<div class="card-body">
<h4>Team Member 3</h4>
<p>Database & API Developer</p>
</div>
</div>
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
<p class="mb-0">© 2025 Alumni Connect & Opportunity Exchange. All rights reserved.</p>
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