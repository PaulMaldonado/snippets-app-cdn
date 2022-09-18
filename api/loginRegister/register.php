<?php 
    include "../conexion.php";


    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = $_POST['username'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $extention = '';

        $route_image = '../api/loginRegister/img';
        $image = $_FILES['image']['tmp_name'];
        $nameFile = $_FILES['image']['name'];
        $infoImage = pathinfo($nameFile);

        if($image != '') {
            $extention = $infoImage['extension'];

            if($extention == 'png' || $extention == 'PNG' || $extention == 'jpg' || $extention == 'JPG') {
                $file = $username.rand(0000, 9999).'.'.$extention;

                move_uploaded_file($image, 'img/'.$file);
                $route = $route_image."/".$file;
            } else {
                echo "fail";

                exit;
            }

            $password_encrypted = password_hash($password, PASSWORD_BCRYPT);

            $insert_user = "INSERT INTO users(username, email, password, image) VALUES('$username', '$email', '$password_encrypted', '$route')";
            $result = mysqli_query($conexion, $insert_user);

            if($result) {
                echo "success";
            } else {
                echo "fail";
            }

        } else {
            $route_image = '../api/loginRegister/img/profile.png';
        }

    } else {
        header("location: ../../index.php");
    }
?>