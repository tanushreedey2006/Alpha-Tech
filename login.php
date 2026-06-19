<?php
session_start();

if(isset($_SESSION['user_id']))
{
    header("Location: dashboard.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login | Building Bridges</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
*{
margin:0;
padding:0;
box-sizing:border-box;
font-family:'Segoe UI',sans-serif;
}

body{
background:linear-gradient(135deg,#0f172a,#1e3a8a,#2563eb);
min-height:100vh;
display:flex;
justify-content:center;
align-items:center;
padding:20px;
}

.login-box{
width:950px;
background:rgba(255,255,255,.12);
backdrop-filter:blur(20px);
border-radius:25px;
overflow:hidden;
box-shadow:0 20px 50px rgba(0,0,0,.3);
border:1px solid rgba(255,255,255,.2);
}

.left{
background:linear-gradient(135deg,#2563eb,#1d4ed8);
padding:60px 45px;
color:white;
display:flex;
flex-direction:column;
justify-content:center;
}

.left h1{
font-size:42px;
font-weight:700;
margin-bottom:15px;
}

.left h4{
margin-bottom:30px;
opacity:.9;
}

.left p{
font-size:18px;
margin-bottom:15px;
}

.left h5{
margin-top:30px;
font-weight:600;
}

.right{
background:white;
padding:60px 45px;
}

.right h2{
font-weight:700;
color:#1e3a8a;
margin-bottom:30px;
}

.form-control,
.form-select{
height:55px;
border-radius:12px;
border:1px solid #ddd;
padding-left:15px;
transition:.3s;
}

.form-control:focus,
.form-select:focus{
border-color:#2563eb;
box-shadow:0 0 10px rgba(37,99,235,.2);
}

label{
font-weight:600;
margin-bottom:8px;
}

.btn-login{
width:100%;
height:55px;
border:none;
border-radius:12px;
background:linear-gradient(90deg,#2563eb,#1d4ed8);
color:white;
font-size:18px;
font-weight:600;
transition:.3s;
}

.btn-login:hover{
transform:translateY(-2px);
box-shadow:0 10px 20px rgba(37,99,235,.3);
}

a{
text-decoration:none;
}

a:hover{
text-decoration:underline;
}

.form-check-label{
font-size:15px;
}

@media(max-width:768px){

.left{
display:none;
}

.login-box{
width:100%;
}

.right{
padding:40px 25px;
}

}

</style>

</head>

<body>

<div class="login-box">

<div class="row">

<div class="col-md-6 left">

<h1>Building Bridges</h1>

<h4>Alumni Connect & Opportunity Exchange</h4>

<hr>

<p>

✓ Connect with Alumni

</p>

<p>

✓ Find Mentors

</p>

<p>

✓ Discover Internships

</p>

<p>

✓ Join Events

</p>

<br>

<h5>Connect. Mentor. Grow.</h5>

</div>

<div class="col-md-6 right">

<h2 class="text-center mb-4">

Login

</h2>

<form action="login_action.php" method="POST">

<div class="mb-3">

<label>Email</label>

<input type="email" name="email" class="form-control" required>

</div>

<div class="mb-3">

<label>Password</label>

<input type="password" name="password" class="form-control" required>

</div>

<div class="mb-3">

<label>Login As</label>

<select name="role" class="form-select" required>
    <option value="">Select Role</option>
    <option value="Student">Student</option>
    <option value="Alumni">Alumni</option>
    <option value="Admin">Admin</option>
</select>

</div>


<div class="form-check mb-3">
    <input class="form-check-input" type="checkbox" id="remember">
    <label class="form-check-label" for="remember">
        Remember Me
    </label>
</div>

<button type="submit" name="login" class="btn btn-login">
    Login
</button>
<br><br>

<div class="text-center">

<a href="#">Forgot Password?</a>

<br><br>

Don't have an account?

<a href="signup.php">

Register

</a>

</div>

</form>

</div>

</div>

</div>

</body>

</html>