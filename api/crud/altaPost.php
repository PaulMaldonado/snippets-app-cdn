<?php 
    include "../conexion.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $user = $_SESSION['user'];
        $image = $_SESSION['image'];
        $title = $_POST['title'];
        $code = $_POST['code'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $insert_post = "INSERT INTO posts(user, image, title, code, description, category) VALUES('$user', '$image', '$title', '$code', '$description', '$category')";
        $result_post = mysqli_query($conexion, $insert_post);

        if($result_post) {
            echo "success";
        } else {
            echo "fail";
        }
    }
?>