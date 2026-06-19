<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Contact Us</title>

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

.contact-hero{
    background:linear-gradient(rgba(8,20,45,.9),rgba(8,20,45,.9)),
    url('https://images.unsplash.com/photo-1516321318423-f06f85e504b3');
    background-size:cover;
    background-position:center;
    color:white;
    padding:100px 0;
}

.contact-card{
    background:white;
    border:none;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
    transition:.3s;
}

.contact-card:hover{
    transform:translateY(-5px);
}

.icon-box{
    width:70px;
    height:70px;
    background:#0d6efd;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    border-radius:50%;
    font-size:28px;
    margin:auto;
}

.contact-form{
    background:white;
    padding:40px;
    border-radius:15px;
    box-shadow:0 5px 15px rgba(0,0,0,.08);
}

.social-icon{
    width:45px;
    height:45px;
    border-radius:50%;
    background:#0d6efd;
    color:white;
    display:inline-flex;
    justify-content:center;
    align-items:center;
    margin:5px;
    text-decoration:none;
    font-weight:bold;
}

.footer{
    background:#08142d;
    color:white;
}


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
</style>
</head>
<body>

<?php
session_start();
?>

<!-- NAVBAR -->
<?php  include('nav.php');   ?>  

<!-- Hero Section -->
<section class="contact-hero text-center">
<div class="container">
<h1 class="display-4 fw-bold">Contact Us</h1>
<p class="lead">
We'd love to hear from you. Connect with our Alumni Community Team.
</p>
</div>
</section>

<!-- Contact Info -->
<section class="py-5">
<div class="container">

<div class="row g-4 text-center">

<div class="col-md-4">
<div class="contact-card p-4">
<div class="icon-box">📍</div>
<h4 class="mt-3">Address</h4>
<p>
ABC Engineering College<br>
Technology Park Road<br>
Chennai, India
</p>
</div>
</div>

<div class="col-md-4">
<div class="contact-card p-4">
<div class="icon-box">📞</div>
<h4 class="mt-3">Phone</h4>
<p>
+91 9876543210<br>
+91 9876543211
</p>
</div>
</div>

<div class="col-md-4">
<div class="contact-card p-4">
<div class="icon-box">✉️</div>
<h4 class="mt-3">Email</h4>
<p>
alumni@college.edu<br>
support@college.edu
</p>
</div>
</div>

</div>

</div>
</section>

<!-- Contact Form -->
<section class="pb-5">
<div class="container">

<div class="row">

<div class="col-lg-7">

<div class="contact-form">

<h2 class="mb-4">
Send Us A Message
</h2>

<form>

<div class="row">

<div class="col-md-6 mb-3">
<input type="text"
class="form-control"
placeholder="Your Name">
</div>

<div class="col-md-6 mb-3">
<input type="email"
class="form-control"
placeholder="Email Address">
</div>

</div>

<div class="mb-3">
<input type="text"
class="form-control"
placeholder="Subject">
</div>

<div class="mb-3">
<textarea class="form-control"
rows="6"
placeholder="Write your message..."></textarea>
</div>

<button class="btn btn-primary btn-lg">
Send Message
</button>

</form>

</div>

</div>

<div class="col-lg-5">

<div class="contact-form">

<h3>Office Hours</h3>

<hr>

<p><strong>Monday - Friday:</strong> 9:00 AM - 5:00 PM</p>

<p><strong>Saturday:</strong> 10:00 AM - 2:00 PM</p>

<p><strong>Sunday:</strong> Closed</p>

<hr>

<h4>Follow Us</h4>

<a href="#" class="social-icon">f</a>
<a href="#" class="social-icon">in</a>
<a href="#" class="social-icon">X</a>
<a href="#" class="social-icon">▶</a>

<hr>

<h4>Quick Support</h4>

<p>
Need help with mentor requests, event registration,
or alumni networking? Our support team is available.
</p>

</div>

</div>

</div>

</div>
</section>

<!-- Google Map -->
<section>
<div class="container-fluid p-0">
    <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3704.885632941321!2d87.73476217532193!3d21.784686880060548!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3a0326f87e6e8479%3A0xb610eefe9d9387c1!2sContai%20College%20of%20Learning%20%26%20Management%20Science!5e0!3m2!1sen!2sin!4v1781593010074!5m2!1sen!2sin"
        width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
        referrerpolicy="no-referrer-when-downgrade"></iframe>

</div>
</section>

<!-- Footer -->
<footer class="footer py-4 text-center">
<div class="container">
<p class="mb-0">
© 2026 Alumni Connect & Opportunity Exchange |
Building Bridges Between Students and Alumni
</p>
</div>
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>