<?php 
    include "../conexion.php";

    $email = $_POST['email'];
    $password = $_POST['password'];

    $insert_login = "SELECT username, image, email, password FROM users WHERE email = '$email'";
    $result = mysqli_query($conexion, $insert_login);

    if($row = mysqli_fetch_array($result)) {
        $email_bd = $row['email'];
        $pass = $row['password'];
        $username = $row['username'];
        $image = $row['image'];
    }

    $pass_encrypted = password_verify($password, $pass);

    if($email == $email_bd && $pass_encrypted = true) {
        $_SESSION['user'] = $username;
        $_SESSION['image'] = $image;

        echo "success";
    } else {
        echo "fail";
    }
?>