<?php
session_start();
include("includes/connect.php");

$id = $_GET['id'];

$result = mysqli_query($conn, "SELECT * FROM users1 WHERE id='$id'");
$user = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Profile</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    background:#061524;
    color:white;
}

.profile-card{
    background:#10263d;
    padding:30px;
    border-radius:20px;
    margin-top:50px;
    box-shadow:0 0 20px rgba(0,255,255,.2);
    text-align:center;
}

.profile-img{
    width:150px;
    height:150px;
    border-radius:50%;
    object-fit:cover;
    border:3px solid cyan;
}
</style>

</head>

<body>

<div class="container">

<div class="profile-card">

<img class="profile-img"
src="<?= !empty($user['profile_image']) ? $user['profile_image'] : 'assets/default.png'; ?>">

<h2 class="mt-3"><?= $user['full_name']; ?></h2>

<p class="text-info"><?= $user['role']; ?></p>

<hr>

<p><b>Department:</b> <?= $user['department']; ?></p>
<p><b>Phone:</b> <?= $user['phone']; ?></p>
<p><b>Email:</b> <?= $user['email']; ?></p>

</div>

</div>

</body>
</html>