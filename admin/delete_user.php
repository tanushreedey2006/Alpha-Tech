<?php

session_start();
include("includes/db_connect.php");

/* Admin Check */
if(!isset($_SESSION['role']) || $_SESSION['role'] != 'Admin'){
    header("Location: admin_login.php");
    exit();
}

if(!isset($_GET['id'])){
    header("Location: user_list.php");
    exit();
}

$id = (int)$_GET['id'];

/* Get User First */
$query = mysqli_query($conn,
"SELECT * FROM users1 WHERE id='$id'");

if(mysqli_num_rows($query) == 0){
    header("Location: user_list.php");
    exit();
}

$user = mysqli_fetch_assoc($query);

/* Delete Profile Image */
if(!empty($user['profile_image'])){

    $imagePath = "../".$user['profile_image'];

    if(file_exists($imagePath)){
        unlink($imagePath);
    }
}

/* Delete User */
$delete = mysqli_query($conn,
"DELETE FROM users1 WHERE id='$id'");

if($delete){

    $_SESSION['success'] = "User deleted successfully.";

}else{

    $_SESSION['error'] = "Failed to delete user.";
}

header("Location: user_list.php");
exit();

?>
