<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        
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
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top">

<div class="container">

<a class="navbar-brand d-flex align-items-center" href="">

<img src="assets/logo.png" 
     alt="Logo"
     style="width:45px; height:45px; object-fit:contain; margin-right:10px;">

<span style="color:#55d9ff; font-weight:700;">
Building Bridges
</span>

</a>

<button
class="navbar-toggler"
type="button"
data-bs-toggle="collapse"
data-bs-target="#menu">

<span class="navbar-toggler-icon"></span>

</button>

<div class="collapse navbar-collapse" id="menu">

<ul class="navbar-nav ms-auto">

<li class="nav-item">
<a class="nav-link" href="index.php">
Home
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="about.php">
About
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="alumni.php">
Alumni
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="mentorship.php">
Mentorship
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="opportunuties.php">
Opportunities
</a>
</li>

<li class="nav-item">
<a class="nav-link" href="event.php">
Events
</a>
</li>

<li class="nav-item ms-3">

<?php if(isset($_SESSION['user_id'])) { ?>

    <!-- AFTER LOGIN: PROFILE + NAME + LOGOUT -->
    <div style="display:flex;align-items:center;gap:12px;">

        <!-- PROFILE IMAGE -->
        <img src="<?= !empty($_SESSION['profile_image']) 
            ? $_SESSION['profile_image'] 
            : 'assets/default.png'; ?>"

            onerror="this.src='assets/default.png';"

            style="width:40px;height:40px;border-radius:50%;object-fit:cover;border:2px solid #55d9ff;">

        <!-- NAME -->
        <span style="color:white;font-weight:600;">
            <?= htmlspecialchars($_SESSION['full_name']); ?>
        </span>

        <!-- PROFILE LINK -->
        <a href="student_profile.php?id=<?= $_SESSION['user_id']; ?>" 
           class="btn btn-sm btn-info">
            Profile
        </a>

        <!-- LOGOUT -->
        <a href="logout.php" class="btn btn-sm btn-danger">
            Logout
        </a>

    </div>

<?php } else { ?>

    <!-- BEFORE LOGIN -->
    <a href="signup.php" class="signup-btn">
        Sign Up
    </a>

<?php } ?>

</li>

</ul>

</div>

</div>

</nav>
</body>
</html>