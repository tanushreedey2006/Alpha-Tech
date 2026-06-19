<?php
session_start();
include("includes/db_connect.php");

if(!isset($_SESSION['user_id']) || !isset($_SESSION['role']) || $_SESSION['role'] != 'admin'){
    header("Location: admin_login.php");
    exit();
}

/* COUNTS */
$totalUsers = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM users1"))['total'];
$totalStudents = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM users1 WHERE role='student'"))['total'];
$totalAlumni = mysqli_fetch_assoc(mysqli_query($conn,"SELECT COUNT(*) AS total FROM users1 WHERE role='alumni'"))['total'];
$totalMentors = $totalAlumni;
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Admin Dashboard</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

<style>

/* ===== GLOBAL ===== */
body{
    margin:0;
    font-family: 'Segoe UI', sans-serif;
    background:#f4f6f9;
    color:#333;
}

/* ===== SIDEBAR ===== */
.sidebar{
    position:fixed;
    left:0;
    top:0;
    width:260px;
    height:100vh;
    background:#1f2937;
    color:#fff;
}

.logo{
    padding:20px;
    font-size:20px;
    font-weight:700;
    text-align:center;
    background:#111827;
    color:#38bdf8;
}

.admin-profile{
    text-align:center;
    padding:15px;
    border-bottom:1px solid rgba(255,255,255,0.1);
}

.admin-profile img{
    width:70px;
    height:70px;
    border-radius:50%;
    object-fit:cover;
    border:2px solid #38bdf8;
}

/* .admin-profile h6{
    margin-top:10px;
    color:#fff;
} */

.sidebar a{
    display:block;
    padding:14px 20px;
    color:#cbd5e1;
    text-decoration:none;
    transition:0.3s;
}

.sidebar a:hover{
    background:#374151;
    color:#fff;
}

/* ===== MAIN ===== */
.main-content{
    margin-left:260px;
    padding:20px;
}

/* ===== TOPBAR ===== */
.topbar{
    background:#fff;
    padding:15px 20px;
    border-radius:10px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
}

.topbar h4{
    margin:0;
}

/* ===== CARDS ===== */
.card-box{
    background:#fff;
    border-radius:12px;
    padding:20px;
    text-align:center;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
    transition:0.3s;
}

.card-box:hover{
    transform:translateY(-5px);
}

.card-box i{
    font-size:30px;
    color:#0ea5e9;
    margin-bottom:10px;
}

.card-box h2{
    margin:0;
    font-size:26px;
}

.card-box p{
    margin:0;
    color:#6b7280;
}

/* ===== TABLE ===== */
.table-card{
    margin-top:20px;
    background:#fff;
    padding:20px;
    border-radius:12px;
    box-shadow:0 2px 10px rgba(0,0,0,0.05);
}

table th{
    background:#f1f5f9;
}

table tbody tr:hover{
    background:#f9fafb;
}

/* ===== PROFILE TOP ===== */
.admin-top{
    display:flex;
    align-items:center;
    gap:10px;
    padding:15px;
    border-bottom:1px solid rgba(255,255,255,0.1);
}

.admin-top img{
    width:45px;
    height:45px;
    border-radius:50%;
    object-fit:cover;
}

</style>
</head>

<body>

<!-- SIDEBAR -->
<div class="sidebar">

<div class="logo">Building Bridges</div>

<!-- ADMIN PROFILE -->


<div class="admin-profile text-center">

<?php if(!empty($_SESSION['profile_image'])){ ?>
    <img src="../<?= $_SESSION['profile_image']; ?>" 
         style="width:80px;height:80px;border-radius:50%;object-fit:cover;border:3px solid cyan;">
<?php } else { ?>
    <img src="https://ui-avatars.com/api/?name=Admin" 
         style="width:80px;height:80px;border-radius:50%;">
<?php } ?>

</div>

<a href="admin_dashboard.php"><i class="fa fa-home"></i> Dashboard</a>
<a href="user_list.php"><i class="fa fa-users"></i> Users</a>
<a href="student_list.php"><i class="fa fa-user-graduate"></i> Students</a>
<a href="mentor_list.php"><i class="fa fa-user-tie"></i> Alumni</a>
<a href="mentor_requests.php"><i class="fa fa-handshake"></i> Requests</a>
<a href="logout.php"><i class="fa fa-sign-out-alt"></i> Logout</a>

</div>

<!-- MAIN -->
<div class="main-content">

<!-- TOPBAR -->
<div class="topbar">
<h4>Admin Dashboard</h4>

<div class="d-flex align-items-center gap-2">
<i class="fa fa-user-shield"></i>
<strong><?= $_SESSION['full_name'] ?? 'Admin' ?></strong>
</div>

</div>

<!-- CARDS -->
<div class="row g-3 mt-2">

<div class="col-md-3">
<div class="card-box">
<i class="fa fa-users"></i>
<h2><?= $totalUsers ?></h2>
<p>Total Users</p>
</div>
</div>

<div class="col-md-3">
<div class="card-box">
<i class="fa fa-user-graduate"></i>
<h2><?= $totalStudents ?></h2>
<p>Students</p>
</div>
</div>

<div class="col-md-3">
<div class="card-box">
<i class="fa fa-user-tie"></i>
<h2><?= $totalAlumni ?></h2>
<p>Alumni</p>
</div>
</div>

<div class="col-md-3">
<div class="card-box">
<i class="fa fa-chalkboard-teacher"></i>
<h2><?= $totalMentors ?></h2>
<p>Mentors</p>
</div>
</div>

</div>

<!-- TABLE -->
<div class="table-card">

<h5 class="mb-3">Recent Users</h5>

<table class="table table-hover">
<thead>
<tr>
<th>ID</th>
<th>Name</th>
<th>Email</th>
<th>Role</th>
<th>Joined</th>
</tr>
</thead>

<tbody>
<?php
$recent = mysqli_query($conn,"SELECT * FROM users1 ORDER BY id DESC LIMIT 10");
while($row=mysqli_fetch_assoc($recent)){
?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['full_name'] ?></td>
<td><?= $row['email'] ?></td>
<td><?= $row['role'] ?></td>
<td><?= $row['created_at'] ?></td>
</tr>
<?php } ?>
</tbody>

</table>

</div>

</div>

</body>
</html>