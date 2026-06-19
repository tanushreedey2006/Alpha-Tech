<?php
include("includes/connect.php");

$result = mysqli_query($conn, "SELECT * FROM opportunities WHERE status='Open' ORDER BY id DESC");
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Opportunities</title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

<style>
body{
    
    color:white;
}



.section{
    padding:120px 0;
    background: #0e2a47;
    margin-bottom: -5%;
}

.card-opportunity{
    background:#10263d;
    border:1px solid cyan;
    border-radius:15px;
    padding:20px;
    height:100%;
    box-shadow:0 0 15px rgba(0,255,255,.2);
    transition:0.3s;
}

.card-opportunity:hover{
    transform:translateY(-6px);
}

.badge-custom{
    background:cyan;
    color:#081421;
    padding:5px 10px;
    border-radius:20px;
    font-weight:bold;
}

.btn-apply{
    background:cyan;
    color:#081421;
    font-weight:bold;
}
</style>
</head>

<body>

<?php include("nav.php"); ?>

<section class="section">
<div class="container">

<h2 class="text-center text-info mb-5">Latest Opportunities</h2>

<div class="row g-4">

<?php while($row = mysqli_fetch_assoc($result)){ ?>

<div class="col-md-4">

<div class="card-opportunity">

<span class="badge-custom">
    <?= $row['opportunity_type'] ?>
</span>

<h4 class="mt-3">
    <?= $row['title'] ?>
</h4>

<p>
<strong>Company:</strong> <?= $row['company_name'] ?>
</p>

<p>
<strong>Location:</strong> <?= $row['location'] ?>
</p>

<p>
<?= substr($row['description'], 0, 100) ?>...
</p>

<p>
<strong>Deadline:</strong> <?= $row['application_deadline'] ?>
</p>

<a href="opportunity_view.php?id=<?= $row['id'] ?>" class="btn btn-apply mt-2 w-100">
View Details
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