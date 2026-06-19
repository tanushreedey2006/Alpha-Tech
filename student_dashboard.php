<?php
session_start();

// if not logged in → redirect
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit();
}

$name = $_SESSION['user_name'];
$role = $_SESSION['role'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Dashboard | Building Bridges</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#0b1220;
    color:white;
    font-family:Arial;
}

/* sidebar */
.sidebar{
    height:100vh;
    background:#0d1b2a;
    padding:20px;
    position:fixed;
    width:250px;
    box-shadow:2px 0 10px rgba(0,255,255,0.2);
}

.sidebar h2{
    color:cyan;
    margin-bottom:30px;
}

.sidebar a{
    display:block;
    color:white;
    padding:10px;
    text-decoration:none;
    margin-bottom:10px;
    border-radius:8px;
}

.sidebar a:hover{
    background:cyan;
    color:#0b1220;
}

/* main */
.main{
    margin-left:270px;
    padding:30px;
}

.card-box{
    background:#10263d;
    padding:20px;
    border-radius:12px;
    border:1px solid cyan;
    box-shadow:0 0 10px rgba(0,255,255,0.2);
}

.btn-logout{
    background:red;
    color:white;
    border:none;
    padding:8px 15px;
    border-radius:8px;
}
</style>

</head>
<body>

<!-- Sidebar -->
<div class="sidebar">

<h2>BB Dashboard</h2>

<p>Hello, <b><?php echo $name; ?></b></p>
<p>Role: <?php echo $role; ?></p>

<hr>

<a href="dashboard.php">Home</a>
<a href="profile.php">Profile</a>
<a href="alumni.html">Alumni</a>
<a href="mentorship.html">Mentorship</a>
<a href="events.html">Events</a>

<a href="logout.php" class="btn-logout mt-3 d-inline-block">
Logout
</a>

</div>

<!-- Main Content -->
<div class="main">

<h1>Welcome to Building Bridges 🎓</h1>

<div class="row mt-4">

<div class="col-md-4">
<div class="card-box">
<h4>Students</h4>
<p>Manage student connections</p>
</div>
</div>

<div class="col-md-4">
<div class="card-box">
<h4>Mentorship</h4>
<p>Find mentors easily</p>
</div>
</div>

<div class="col-md-4">
<div class="card-box">
<h4>Opportunities</h4>
<p>Jobs & Internships</p>
</div>
</div>

</div>

</div>

</body>
</html>