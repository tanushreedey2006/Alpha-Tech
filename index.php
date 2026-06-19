<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Building Bridges</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

*{
margin:0;
padding:0;
box-sizing:border-box;
}

body{

background:#061524;
color:white;
font-family:Segoe UI,sans-serif;

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

/* Hero */

.hero{

min-height:100vh;

background:
linear-gradient(
135deg,
rgba(6,21,36,.95),
rgba(10,39,68,.9)
),
url("assets/college.jpeg");

background-size:cover;
background-position:center;
background-repeat:no-repeat;

display:flex;
align-items:center;
justify-content:center;
text-align:center;

padding-top:90px;

}

.hero h1{

font-size:75px;

font-weight:800;

color:#55d9ff;

text-shadow:0px 0px 20px rgba(85,217,255,.5);

}

.hero p{

font-size:22px;

max-width:850px;

margin:auto;

margin-top:25px;

line-height:1.8;

color:#d6e7f5;

}

.hero-btn{

padding:14px 35px;

border-radius:30px;

font-weight:bold;

margin-top:25px;

}

/* Section Title */

.section-title{

color:#55d9ff;

font-weight:700;

margin-bottom:40px;

}

/* Stats */

.stats{

padding:80px 0;

}

.stat-card{

background:#10263d;

padding:30px;

border-radius:20px;

text-align:center;

transition:.4s;

box-shadow:0px 5px 20px rgba(0,150,255,.1);

}

.stat-card:hover{

transform:translateY(-8px);

}

.stat-card h2{

color:#55d9ff;

font-weight:700;

}

/* Features */

.features{

padding:80px 0;

}

.feature-card{

background:#10263d;

padding:30px;

border-radius:20px;

text-align:center;

height:100%;

transition:.4s;

}

.feature-card:hover{

transform:translateY(-8px);

box-shadow:0px 10px 25px rgba(85,217,255,.2);

}

.feature-card h4{

color:#55d9ff;

margin-bottom:15px;

}

/* Story */

.story{

background:#10263d;

padding:25px;

border-left:5px solid #55d9ff;

border-radius:15px;

margin-bottom:20px;

}

/* Footer */

footer{

background:#08192d;

padding:25px;

text-align:center;

margin-top:50px;

}

</style>

</head>

<body>

<!-- Navbar -->

<?php  include('nav.php');   ?>  

<!-- HERO SECTION -->

<section class="hero">

<div class="container">

<div class="row align-items-center">

<!-- Left Side -->

<div class="col-lg-6">

<h1>

BUILDING

<span style="color:white;">

BRIDGES

</span>

</h1>

<p>

Connecting students and alumni through
mentorship, career guidance,
internships and professional networking
to build a stronger future.

</p>

<div class="mt-4">

<a href="signup.php"
class="btn btn-info hero-btn">

Get Started

</a>

<a href="alumni.php"
class="btn btn-outline-light hero-btn">

Explore Alumni

</a>

</div>

<div class="row mt-5">

<div class="col-4">

<h3 style="color:#55d9ff;">

1000+

</h3>

<p>

Students

</p>

</div>

<div class="col-4">

<h3 style="color:#55d9ff;">

500+

</h3>

<p>

Alumni

</p>

</div>

<div class="col-4">

<h3 style="color:#55d9ff;">

200+

</h3>

<p>

Mentors

</p>

</div>

</div>

</div>

<!-- Right Side -->

<div class="col-lg-6 mt-5 mt-lg-0">

<div
style="

background:#10263d;

padding:30px;

border-radius:20px;

box-shadow:
0px 10px 30px rgba(0,200,255,.2);

">

<img

src="assets/college.jpeg"

class="img-fluid rounded"

>

<div class="mt-4">

<h3
style="color:#55d9ff;">

Why Building Bridges?

</h3>

<p>

✔ Connect with successful alumni

</p>

<p>

✔ Get mentorship from experts

</p>

<p>

✔ Find internships & jobs

</p>

<p>

✔ Build your professional network

</p>

</div>

</div>

</div>

</div>

</div>

</section>

<!-- Statistics -->

<section class="stats">

<div class="container">

<h2
class="text-center section-title">

Our Community

</h2>

<div class="row g-4">

<div class="col-md-3">

<div class="stat-card">

<h2>

1000+

</h2>

<h5>

Students

</h5>

<p>

Growing future leaders.

</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<h2>

500+

</h2>

<h5>

Alumni

</h5>

<p>

Successful professionals.

</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<h2>

200+

</h2>

<h5>

Mentors

</h5>

<p>

Industry experts.

</p>

</div>

</div>

<div class="col-md-3">

<div class="stat-card">

<h2>

150+

</h2>

<h5>

Internships

</h5>

<p>

Career opportunities.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- FEATURES SECTION -->

<section class="features">

<div class="container">

<h2 class="text-center section-title">

Our Features

</h2>

<p class="text-center mb-5">

Helping students and alumni build
strong professional connections.

</p>

<div class="row g-4">

<div class="col-md-3">

<div class="feature-card">

<h4>

🎓 Find Alumni

</h4>

<p>

Search and connect with successful
alumni from different industries.

</p>

</div>

</div>

<div class="col-md-3">

<div class="feature-card">

<h4>

🤝 Mentorship

</h4>

<p>

Receive career guidance from
experienced professionals.

</p>

</div>

</div>

<div class="col-md-3">

<div class="feature-card">

<h4>

💼 Opportunities

</h4>

<p>

Discover internships and
career opportunities.

</p>

</div>

</div>

<div class="col-md-3">

<div class="feature-card">

<h4>

📅 Events

</h4>

<p>

Participate in alumni meets,
seminars and webinars.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- ABOUT -->

<section class="py-5">

<div class="container">

<div class="row align-items-center">

<div class="col-lg-6">

<img
src="assets/college.jpeg"
class="img-fluid rounded shadow">

</div>

<div class="col-lg-6">

<h2 class="section-title">

About Building Bridges

</h2>

<p>

Building Bridges is an alumni-student
networking platform that helps students
connect with successful graduates for
career advice, mentorship and
professional development.

</p>

<p>

The platform aims to strengthen
relationships between students and alumni
while creating opportunities for growth.

</p>

<a
href="about.php"
class="btn btn-info mt-3">

Learn More

</a>

</div>

</div>

</div>

</section>

<!-- WHY CHOOSE US -->

<section class="py-5">

<div class="container">

<h2 class="text-center section-title">

Why Choose Us?

</h2>

<div class="row g-4 mt-3">

<div class="col-md-4">

<div class="feature-card">

<h3>

🌍

</h3>

<h4>

Strong Network

</h4>

<p>

Connect with alumni
working in different
companies and industries.

</p>

</div>

</div>

<div class="col-md-4">

<div class="feature-card">

<h3>

🚀

</h3>

<h4>

Career Growth

</h4>

<p>

Get valuable career advice,
internships and guidance.

</p>

</div>

</div>

<div class="col-md-4">

<div class="feature-card">

<h3>

⭐

</h3>

<h4>

Expert Mentors

</h4>

<p>

Learn directly from
experienced professionals.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- CALL TO ACTION -->

<section class="py-5">

<div class="container">

<div
class="text-center"

style="

background:#10263d;

padding:50px;

border-radius:20px;

">

<h2>

Ready To Build Your Future?

</h2>

<p class="mt-3">

Join Building Bridges today and
connect with alumni and mentors.

</p>

<a
href="signup.php"
class="btn btn-info mt-3">

Join Now

</a>

</div>

</div>

</section>

<!-- SUCCESS STORIES -->

<section class="py-5">

<div class="container">

<h2 class="text-center section-title">

Success Stories

</h2>

<div class="row g-4 mt-3">

<div class="col-md-4">

<div class="feature-card">

<h4>

🎓 Student Success

</h4>

<p>

"Building Bridges helped me
find a mentor who guided me
towards my first internship."

</p>

<h6 class="mt-3">

- Rahul Das

</h6>

</div>

</div>

<div class="col-md-4">

<div class="feature-card">

<h4>

💼 Career Growth

</h4>

<p>

"The alumni network gave me
valuable career advice and
industry exposure."

</p>

<h6 class="mt-3">

- Priya Roy

</h6>

</div>

</div>

<div class="col-md-4">

<div class="feature-card">

<h4>

🚀 Professional Journey

</h4>

<p>

"I connected with alumni
working at top companies and
improved my professional skills."

</p>

<h6 class="mt-3">

- Arijit Sen

</h6>

</div>

</div>

</div>

</div>

</section>

<!-- UPCOMING EVENTS -->

<section class="py-5">

<div class="container">

<h2 class="text-center section-title">

Upcoming Events

</h2>

<div class="row g-4 mt-3">

<div class="col-md-4">

<div class="stat-card">

<h4>

📅 Alumni Meet

</h4>

<p>

Annual alumni interaction
program.

</p>

</div>

</div>

<div class="col-md-4">

<div class="stat-card">

<h4>

🎤 Career Seminar

</h4>

<p>

Industry experts share
career insights.

</p>

</div>

</div>

<div class="col-md-4">

<div class="stat-card">

<h4>

💻 Webinar

</h4>

<p>

Online mentorship and
networking session.

</p>

</div>

</div>

</div>

</div>

</section>

<!-- TESTIMONIALS -->

<section class="py-5">

<div class="container">

<h2 class="text-center section-title">

What People Say

</h2>

<div class="row g-4 mt-3">

<div class="col-md-6">

<div class="story">

⭐⭐⭐⭐⭐

<br><br>

"Excellent platform for students
to connect with experienced
alumni and mentors."

</div>

</div>

<div class="col-md-6">

<div class="story">

⭐⭐⭐⭐⭐

<br><br>

"A great initiative for building
professional relationships and
career opportunities."

</div>

</div>

</div>

</div>

</section>

<!-- CONTACT SECTION -->

<section class="py-5">

<div class="container">

<div class="text-center">

<h2 class="section-title">

Get In Touch

</h2>

<p>

Have questions?
We're here to help.

</p>

<a
href="contact.php"
class="btn btn-info">

Contact Us

</a>

</div>

</div>

</section>

<!-- FOOTER -->

<?php  include('footer.php');   ?>  

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>