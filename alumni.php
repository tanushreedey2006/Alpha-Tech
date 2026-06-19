<?php
session_start();
include("includes/connect.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Find Alumni</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>

body{
    
    color:white;
}


.alumni-section{
    background: #09223c;
    padding:120px 0;
    height: fit-content;;
    margin-bottom:-4%;
}

.alumni-card{
    background:#10263d;
    border:1px solid cyan;
    border-radius:15px;
    padding:20px;
    text-align:center;
    box-shadow:0 0 15px rgba(0,255,255,.3);
    height:100%;
}

.alumni-card img{
    width:120px;
    height:120px;
    border-radius:50%;
    object-fit:cover;
    margin-bottom:15px;
    border:2px solid cyan;
}

.btn-connect{
    background:cyan;
    color:#081421;
    font-weight:bold;
}

</style>

</head>

<body>

<?php include('nav.php'); ?>

<section class="alumni-section">

<div class="container">

<h1 class="text-center text-info mb-5">
Find Alumni
</h1>

<div class="row g-4">

<?php
$result = mysqli_query($conn, "SELECT * FROM users1 WHERE role='alumni' ORDER BY id DESC");

while($row = mysqli_fetch_assoc($result)){
?>

<div class="col-md-4">

<div class="alumni-card">

<?php
$img = $row['profile_image'];

// default image
$imgPath = "assets/default.png";

// if image exists in DB
if(!empty($img)){
    $imgPath = $img;
}
?>

<img src="<?= $row['profile_image'] ?>" 
     style="width:120px;height:120px;border-radius:50%;">

<h4><?= htmlspecialchars($row['full_name']); ?></h4>

<p><?= htmlspecialchars($row['designation'] ?? 'Alumni'); ?></p>

<p><?= htmlspecialchars($row['company'] ?? ''); ?></p>

<p><?= htmlspecialchars($row['bio'] ?? ''); ?></p>

<a href="profile.php?id=<?= $row['id'] ?>" class="btn btn-connect">
View Profile
</a>

</div>

</div>

<?php } ?>

</div>

</div>

</section>
<?php  include('footer.php');   ?>  
</body>
</html>