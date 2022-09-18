<?php 
    include "../conexion.php";

    $email = $_POST['email'];

    $verify_email = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conexion, $verify_email);

    $count_email = mysqli_num_rows($result);

    if($count_email == 0) {
        echo "success";
    } else {
        echo "fail";
    }
?>