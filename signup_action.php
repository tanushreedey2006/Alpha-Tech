<?php
session_start();
include("includes/connect.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $full_name = $_POST['full_name'];
    $email     = $_POST['email'];
    $password  = $_POST['password'];
    $role      = $_POST['role'];

    $department = $_POST['department'];
    $phone      = $_POST['phone'];

    // hash password
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // check email exists
    $check = $conn->prepare("SELECT id FROM users WHERE email=?");
    $check->bind_param("s", $email);
    $check->execute();
    $check->store_result();

    if ($check->num_rows > 0) {
        die("Email already exists!");
    }

    // image upload (simple)
    $image = NULL;

    if (!empty($_FILES['profile_image']['name'])) {

        $imgName = time() . "_" . $_FILES['profile_image']['name'];
        $tmp = $_FILES['profile_image']['tmp_name'];

        move_uploaded_file($tmp, "uploads/" . $imgName);

        $image = "uploads/" . $imgName;
    }

    // insert (simple mysqli way)

$sql = "INSERT INTO users1 
(full_name, email, password, role, department, phone, profile_image)
VALUES (
'$full_name',
'$email',
'$hashed_password',
'$role',
'$department',
'$phone',
'$image'
)";
if ($conn->query($sql) === TRUE) {

    // OPTIONAL: auto login after signup
    $_SESSION['user_id'] = $conn->insert_id;
    $_SESSION['role'] = $role;
    $_SESSION['full_name'] = $full_name;
    $_SESSION['profile_image'] = $image;

    header("Location: index.php");
    exit();
}else {
    die("Insert Error: " . $conn->error);
}

}
?>