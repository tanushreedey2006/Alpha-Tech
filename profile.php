<?php
session_start();
include("includes/connect.php");

$id = $_GET['id'] ?? null;

if(!$id){
    die("No profile selected");
}

$result = mysqli_query($conn, "SELECT * FROM users1 WHERE id=$id AND role='alumni'");
$user = mysqli_fetch_assoc($result);

if(!$user){
    die("Alumni not found");
}

$skills = explode(",", $user['skills'] ?? "");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Alumni Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    background:#081421;
    color:white;
}

.navbar{
    background:#0d1b2a !important;
    box-shadow:0 0 10px cyan;
}

.profile-section{
    padding:120px 0;
}

.profile-card{
    background:#10263d;
    border:1px solid cyan;
    border-radius:20px;
    padding:30px;
    box-shadow:0 0 15px rgba(0,255,255,.3);
}

.profile-img{
    width:180px;
    height:180px;
    border-radius:50%;
    border:4px solid cyan;
    object-fit:cover;
}

.info-box{
    background:#0d1b2a;
    padding:15px;
    border-radius:10px;
    margin-bottom:15px;
}

.skill{
    display:inline-block;
    background:cyan;
    color:#081421;
    padding:8px 15px;
    margin:5px;
    border-radius:20px;
    font-weight:bold;
}

</style>

</head>

<body>

<?php  include('nav.php');   ?>  

<section class="profile-section">

<div class="container">

<div class="profile-card">

<div class="row align-items-center">

<div class="col-md-4 text-center">

<img class="profile-img"
src="<?= !empty($user['profile_image']) ? $user['profile_image'] : 'assets/default.png'; ?>">

<h3 class="mt-3">
<?= htmlspecialchars($user['full_name']); ?>
</h3>

<p class="text-info">
<?= htmlspecialchars($user['designation'] ?? 'Alumni'); ?>
</p>

</div>

<div class="col-md-8">

<div class="info-box">
<h5>College</h5>
<p><?= htmlspecialchars($user['college'] ?? 'N/A'); ?></p>
</div>

<div class="info-box">
<h5>Experience</h5>
<p><?= htmlspecialchars($user['experience'] ?? 'N/A'); ?></p>
</div>

<div class="info-box">
<h5>Email</h5>
<p><?= htmlspecialchars($user['email']); ?></p>
</div>

<div class="info-box">
<h5>LinkedIn</h5>
<p><?= htmlspecialchars($user['linkedin'] ?? 'N/A'); ?></p>
</div>

</div>

</div>

<hr>

<h4 class="text-info">About</h4>

<p>
<?= htmlspecialchars($user['about'] ?? 'No description available.'); ?>
</p>

<h4 class="text-info mt-4">Skills</h4>

<?php foreach($skills as $skill){ ?>
    <?php if(trim($skill) != ""){ ?>
        <span class="skill"><?= htmlspecialchars(trim($skill)); ?></span>
    <?php } ?>
<?php } ?>

</div>

</div>

</section>

</body>
</html>