<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Events | Building Bridges</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="index.html">
<style>

body{

    color:white;
}
.class{
background: #0a2745;
margin-bottom: -4%;
}
.hero{
        
    text-align:center;
    padding:120px 20px;
}

.hero h1{
    color:cyan;
    font-size:60px;
    text-shadow:0 0 15px cyan;
}

.event-card{
    background:#10263d;
    border:1px solid cyan;
    border-radius:20px;
    padding:25px;
    height:100%;
    box-shadow:0 0 15px rgba(0,255,255,.2);
    transition:.3s;
}

.event-card:hover{
    transform:translateY(-5px);
}

.event-card h4{
    color:cyan;
}

.btn-event{
    background:cyan;
    color:#081421;
    font-weight:bold;
}

</style>
</head>
<body>

<?php
session_start();
?>
<?php  include('nav.php');   ?>  
<div class="class">
<section class="hero">
    <h1>Upcoming Events</h1>
    <p>Join webinars, workshops and alumni networking events.</p>
</section>

<div class="container pb-5">

<div class="row g-4">

<div class="col-md-4">
<div class="event-card">
<h4>Career Guidance Webinar</h4>
<p><strong>Date:</strong> 20 July 2026</p>
<p><strong>Speaker:</strong> Rahul Sharma</p>
<p>Learn career planning and industry insights from alumni.</p>
<a href="register_event.html" class="btn btn-event">Register</a>
</div>
</div>

<div class="col-md-4">
<div class="event-card">
<h4>Alumni Meet 2026</h4>
<p><strong>Date:</strong> 25 July 2026</p>
<p><strong>Venue:</strong> College Auditorium</p>
<p>Meet successful alumni and expand your network.</p>
<a href="register_event.html" class="btn btn-event">Register</a>
</div>
</div>

<div class="col-md-4">
<div class="event-card">
<h4>AI & Data Science Workshop</h4>
<p><strong>Date:</strong> 30 July 2026</p>
<p><strong>Mode:</strong> Online</p>
<p>Hands-on workshop on AI, ML and Data Science.</p>
<a href="register_event.html" class="btn btn-event">Register</a>
</div>
</div>

</div>

</div>

</div>
<?php  include('footer.php');   ?>  

</body>
</html>