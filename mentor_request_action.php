<?php

session_start();
include("includes/connect.php");

error_reporting(E_ALL);
ini_set('display_errors', 1);

if(!isset($_SESSION['user_id']))
{
    die("User not logged in");
}

if($_SERVER['REQUEST_METHOD'] != 'POST')
{
    die("Invalid Request");
}

$student_id = $_SESSION['user_id'];

$full_name = mysqli_real_escape_string($conn,$_POST['full_name']);
$email = mysqli_real_escape_string($conn,$_POST['email']);
$college = mysqli_real_escape_string($conn,$_POST['college']);
$course = mysqli_real_escape_string($conn,$_POST['course']);
$career_interest = mysqli_real_escape_string($conn,$_POST['career_interest']);
$preferred_mentor = mysqli_real_escape_string($conn,$_POST['preferred_mentor']);
$mentorship_reason = mysqli_real_escape_string($conn,$_POST['mentorship_reason']);
$skills = mysqli_real_escape_string($conn,$_POST['skills']);

$sql = "INSERT INTO mentor_requests
(
student_id,
full_name,
email,
college,
course,
career_interest,
preferred_mentor,
mentorship_reason,
skills
)
VALUES
(
'$student_id',
'$full_name',
'$email',
'$college',
'$course',
'$career_interest',
'$preferred_mentor',
'$mentorship_reason',
'$skills'
)";

if(mysqli_query($conn,$sql))
{
    header("Location: success.php");
    exit();
}
else
{
    die("MySQL Error : " . mysqli_error($conn));
}

?>
