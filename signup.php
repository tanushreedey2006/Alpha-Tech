<?php
session_start();
include("includes/connect.php");
?>

<!DOCTYPE html>
<html>

<head>

<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<title>Sign Up | Building Bridges</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Segoe UI',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:20px;
    background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
}

.signup-card{
    width:1100px;
    max-width:100%;
    background:rgba(255,255,255,.96);
    border-radius:24px;
    overflow:hidden;
    box-shadow:0 25px 60px rgba(0,0,0,.25);
}

.signup-card .row{
    margin:0;
}

.left{
    background:linear-gradient(135deg,#2563eb,#1e40af);
    color:#fff;
    padding:60px 50px;
    min-height:720px;
    display:flex;
    flex-direction:column;
    justify-content:center;
}

.left h1{
    font-size:38px;
    font-weight:800;
    margin-bottom:10px;
}

.left h4{
    opacity:.9;
    margin-bottom:25px;
}

.left p{
    font-size:16px;
    margin-bottom:18px;
}

.left i{
    width:30px;
    color:#bfdbfe;
}

.left h5{
    margin-top:30px;
    font-weight:700;
}

.right{
    padding:50px;
    background:#fff;
}

.right h2{
    color:#1e3a8a;
    font-weight:800;
}

.right .subtitle{
    color:#6b7280;
    margin-bottom:25px;
}

.form-control,
.form-select{
    height:55px;
    border-radius:12px;
    border:1px solid #dbe2ea;
    margin-bottom:16px;
}

.form-control:focus,
.form-select:focus{
    border-color:#2563eb;
    box-shadow:0 0 0 4px rgba(37,99,235,.15);
}

label{
    font-weight:600;
    color:#374151;
    margin-bottom:8px;
}

.btn-signup{
    height:56px;
    border:none;
    border-radius:12px;
    background:linear-gradient(135deg,#2563eb,#1d4ed8);
    color:#fff;
    font-size:17px;
    font-weight:700;
    transition:.3s;
}

.btn-signup:hover{
    transform:translateY(-2px);
    box-shadow:0 15px 30px rgba(37,99,235,.25);
}

.login-link{
    color:#2563eb;
    font-weight:700;
    text-decoration:none;
}

.login-link:hover{
    text-decoration:underline;
}

@media(max-width:768px){

    body{
        padding:10px;
        align-items:flex-start;
    }

    .left{
        display:none;
    }

    .right{
        padding:30px 20px;
    }

    .signup-card{
        margin-top:15px;
    }
}

</style>


</head>

<body>

<div class="signup-card">

<div class="row g-0">

<div class="col-md-5 left">

<h1>Building Bridges</h1>

<h4>Alumni Connect Platform</h4>

<hr>

<p>

<i class="fa-solid fa-user-group"></i>

Connect Alumni

</p>

<p>

<i class="fa-solid fa-graduation-cap"></i>

Student Mentorship

</p>

<p>

<i class="fa-solid fa-briefcase"></i>

Career Opportunities

</p>

<p>

<i class="fa-solid fa-calendar"></i>

Networking Events

</p>

<br>

<h5>

Connect.

Mentor.

Grow.

</h5>

</div>

<div class="col-md-7 right">

<div class="text-center mb-4">

<h2>Join Building Bridges</h2>

<p class="subtitle">
Build connections, find mentors and unlock opportunities.
</p>

</div>


<?php
if(isset($_SESSION['error'])){
    echo '<div class="alert alert-danger">'.$_SESSION['error'].'</div>';
    unset($_SESSION['error']);
}

if(isset($_SESSION['success'])){
    echo '<div class="alert alert-success">'.$_SESSION['success'].'</div>';
    unset($_SESSION['success']);
}
?>

<form action="signup_action.php"

method="POST"

enctype="multipart/form-data">

<input

type="text"

name="full_name"

class="form-control"

placeholder="Full Name"

required>

<input

type="email"

name="email"

class="form-control"

placeholder="Email Address"

required>

<input

type="password"

name="password"

class="form-control"

placeholder="Password"

required>

<select

name="role"

class="form-select"

required>

<option value="" hidden>

</option>

<option value="Student">Student</option>
<option value="Alumni">Alumni</option>
<option value="Mentor">Admin</option>

</select>

<input

type="text"

name="department"

class="form-control"

placeholder="Department">



<input

type="text"

name="phone"

class="form-control"

placeholder="Phone Number">

<label>

Profile Image

</label>

<input

type="file"

name="profile_image"

class="form-control">

<br>

<button

type="submit"

name="signup"

class="btn btn-signup w-100">

Create Account

</button>

<br><br>

<div class="text-center">

Already have an account?

<a href="login.php">

Login

</a>

</div>

</form>

</div>

</div>

</div>

</body>

</html>