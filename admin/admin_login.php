<?php
session_start();
include("includes/db_connect.php");

/* If already logged in, go dashboard */
if (isset($_SESSION['user_id']) && isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
    header("Location: admin_dashboard.php");
    exit();
}

/* LOGIN PROCESS */
if (isset($_POST['login'])) {

    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];

    $query = mysqli_query($conn,
        "SELECT * FROM users1 WHERE email='$email' AND role='admin' LIMIT 1"
    );

    if (mysqli_num_rows($query) > 0) {

        $user = mysqli_fetch_assoc($query);

        if (password_verify($password, $user['password'])) {

            /* SESSION SET */
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['full_name'] = $user['full_name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['profile_image'] = $user['profile_image'];

            /* REDIRECT */
            header("Location: admin_dashboard.php");
            exit();

        } else {
            echo "<script>
                alert('Invalid Password');
                window.location.href='admin_login.php';
            </script>";
            exit();
        }

    } else {
        echo "<script>
            alert('Admin account not found');
            window.location.href='admin_login.php';
        </script>";
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Admin Login</title>

<link rel="stylesheet"
href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css"/>

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:Arial, Helvetica, sans-serif;
}

body{
    width:100%;
    height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    overflow:hidden;
}

/* VIDEO */
.video-bg{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    z-index:-2;
}

.video-bg video{
    width:100%;
    height:100%;
    object-fit:cover;
}

/* OVERLAY */
.overlay{
    position:fixed;
    top:0;
    left:0;
    width:100%;
    height:100%;
    background:rgba(0,0,0,0.5);
    z-index:-1;
}

/* FORM */
.form{
    width:380px;
    padding:40px 35px;
    border-radius:20px;
    background:rgba(255,255,255,0.12);
    backdrop-filter:blur(12px);
    border:1px solid rgba(255,255,255,0.2);
}

.form h1{
    color:#fff;
    text-align:center;
    margin-bottom:25px;
}

/* INPUT */
.input-box{
    margin-bottom:20px;
    position:relative;
}

.input-box input{
    width:100%;
    height:55px;
    padding-left:45px;
    border:none;
    border-radius:12px;
    outline:none;
    background:rgba(255,255,255,0.15);
    color:#fff;
}

.input-box i{
    position:absolute;
    left:15px;
    top:18px;
    color:#fff;
}

/* BUTTON */
button{
    width:100%;
    height:55px;
    border:none;
    border-radius:12px;
    background:linear-gradient(45deg,#2563eb,#4f46e5);
    color:#fff;
    font-size:16px;
    font-weight:bold;
    cursor:pointer;
}

button:hover{
    background:linear-gradient(45deg,#7c3aed,#db2777);
}

</style>
</head>

<body>

<div class="video-bg">
    <video autoplay muted loop>
        <source src="../images/loginvideo.mp4" type="video/mp4">
    </video>
</div>

<div class="overlay"></div>

<div class="form">

    <h1>Admin Login</h1>

    <form method="POST">

        <div class="input-box">
            <i class="fa fa-envelope"></i>
            <input type="email" name="email" placeholder="Enter Email" required>
        </div>

        <div class="input-box">
            <i class="fa fa-lock"></i>
            <input type="password" name="password" placeholder="Enter Password" required>
        </div>

        <button type="submit" name="login">Login</button>

    </form>

</div>

</body>
</html>