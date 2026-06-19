<?php
session_start();
include("includes/db_connect.php");

/* ✅ ADMIN CHECK */
if(!isset($_SESSION['user_id']) || $_SESSION['role'] != 'admin'){
    header("Location: admin_login.php");
    exit();
}

/* UPDATE STATUS */
if(isset($_GET['action']) && isset($_GET['id'])){

    $id = (int)$_GET['id'];
    $action = $_GET['action'];

    if(in_array($action, ['Accepted', 'Rejected'])){

        mysqli_query($conn,
        "UPDATE mentor_requests 
         SET status='$action' 
         WHERE id=$id");
    }

    header("Location: mentor_requests.php");
    exit();
}

/* FETCH REQUESTS */
$result = mysqli_query($conn,
"SELECT * FROM mentor_requests ORDER BY id DESC");
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Mentor Requests</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">

<style>
body{
    background:#f1f5f9;
}

.container{
    margin-top:30px;
}

.card{
    padding:20px;
    border-radius:15px;
    box-shadow:0 4px 15px rgba(0,0,0,0.1);
}

.badge-pending{ background:#f59e0b; }
.badge-accepted{ background:#22c55e; }
.badge-rejected{ background:#ef4444; }


.sidebar{
position:fixed;
left:0;
top:0;
width:260px;
height:100vh;
background:#0f172a;
overflow-y:auto;
}

.logo{
padding:25px;
font-size:24px;
font-weight:700;
color:#38bdf8;
text-align:center;
border-bottom:1px solid rgba(255,255,255,.1);
}

.sidebar ul{
list-style:none;
padding:0;
margin:0;
}

.sidebar ul li a{
display:block;
padding:15px 25px;
color:#cbd5e1;
text-decoration:none;
transition:.3s;
}

.sidebar ul li a:hover{
background:#1e293b;
color:#fff;
border-left:4px solid #38bdf8;
}

.sidebar ul li a i{
width:25px;
}

/* MAIN */

.main-content{
margin-left:260px;
min-height:100vh;
}

/* TOPBAR */

.topbar{
background:white;
padding:15px 30px;
box-shadow:0 2px 10px rgba(0,0,0,.05);
display:flex;
justify-content:space-between;
align-items:center;
}

.admin-box{
font-weight:600;
}

/* CARDS */

.card-box{
background:white;
border-radius:15px;
padding:25px;
box-shadow:0 4px 15px rgba(0,0,0,.08);
transition:.3s;
height:100%;
}

.card-box:hover{
transform:translateY(-5px);
}

.card-box i{
font-size:35px;
margin-bottom:10px;
}

.card-box h2{
font-weight:700;
}

.card-box p{
margin:0;
color:gray;
}

/* TABLE */

.table-card{
background:white;
border-radius:15px;
padding:20px;
box-shadow:0 4px 15px rgba(0,0,0,.08);
}
</style>

</head>

<body>

<div class="sidebar">




<div class="logo">
Building Bridges
</div>
<!-- TOPBAR -->


    <div class="admin-box" style="display:flex;align-items:center;gap:10px; margin-left:25%;">

        <!-- PROFILE IMAGE -->
        <?php if(!empty($_SESSION['profile_image'])){ ?>
            <img src="../<?= $_SESSION['profile_image']; ?>"
     style="width:50%;height:13vh;border-radius:50%;object-fit:cover;border:2px solid #38bdf8;">
        <?php } else { ?>
            <i class="fa fa-user-shield"></i>
        <?php } ?>

        <!-- NAME -->
        <?= $_SESSION['full_name'] ?? 'Admin'; ?>

    </div>


<ul>

<li>
<a href="admin_dashboard.php">
<i class="fa fa-home"></i> Dashboard
</a>
</li>

<li>
<a href="user_list.php">
<i class="fa fa-users"></i> Manage Users
</a>
</li>

<li>
<a href="student_list.php">
<i class="fa fa-user-graduate"></i> Students
</a>
</li>

<li>
<a href="mentor_list.php">
<i class="fa fa-user-tie"></i> Mentors
</a>
</li>





<li>
<a href="event_list.php">
<i class="fa fa-calendar"></i> Events
</a>
</li>

<li>
<a href="logout.php">
<i class="fa fa-sign-out-alt"></i> Logout
</a>
</li>

</ul>

</div>

<!-- MAIN -->

<div class="main-content">

<!-- TOPBAR -->

<div class="topbar">

<h4>
Admin Dashboard
</h4>

<div class="admin-box">
<i class="fa fa-user-shield"></i>
<?= $_SESSION['full_name'] ?? 'Admin'; ?>
</div>

</div>

<div class="container">

<h3 class="mb-3">Mentor Requests</h3>

<div class="card">

<table class="table table-hover">

<thead>
<tr>
<th>ID</th>
<th>Student</th>
<th>Email</th>
<th>Course</th>
<th>Interest</th>
<th>Mentor</th>
<th>Status</th>
<th>Action</th>
</tr>
</thead>

<tbody>

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<tr>

<td><?= $row['id'] ?></td>

<td>
<?= htmlspecialchars($row['full_name']) ?><br>

</td>

<td><?= htmlspecialchars($row['email']) ?></td>

<td><?= htmlspecialchars($row['course']) ?></td>

<td><?= htmlspecialchars($row['career_interest']) ?></td>

<td><?= htmlspecialchars($row['preferred_mentor']) ?></td>

<td>
<?php if($row['status']=='Pending'){ ?>
<span class="badge bg-warning text-dark">Pending</span>
<?php } elseif($row['status']=='Accepted'){ ?>
<span class="badge bg-success">Accepted</span>
<?php } else { ?>
<span class="badge bg-danger">Rejected</span>
<?php } ?>
</td>

<td>

<?php if($row['status']=='Pending'){ ?>

<a href="mentor_requests.php?action=Accepted&id=<?= $row['id'] ?>"
class="btn btn-success btn-sm">
Accept
</a>

<a href="mentor_requests.php?action=Rejected&id=<?= $row['id'] ?>"
class="btn btn-danger btn-sm">
Reject
</a>

<?php } else { ?>

<span class="text-muted">No action</span>

<?php } ?>

</td>

</tr>

<?php } ?>

</tbody>

</table>

</div>

</div>

</body>
</html>