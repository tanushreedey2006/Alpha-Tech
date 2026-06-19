<?php
session_start();
include("includes/connect.php");

if(isset($_POST['login']))
{
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = $_POST['password'];
    $role = $_POST['role'];

    $query = "SELECT * FROM users1 WHERE email='$email' AND role='$role'";
    $result = mysqli_query($conn, $query);

    if(mysqli_num_rows($result) == 1)
    {
        $user = mysqli_fetch_assoc($result);

        // ✅ FIX: password_verify use koro
        if(password_verify($password, $user['password']))
        {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['full_name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['profile_image'] = $user['profile_image'];

            header("Location: home.php");
            exit();
        }
        else
        {
            echo "<script>
            alert('Incorrect Password!');
            window.location='login.php';
            </script>";
        }
    }
    else
    {
        echo "<script>
        alert('User not found!');
        window.location='login.php';
        </script>";
    }
}
?>