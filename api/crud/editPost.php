<?php 
    include "../conexion.php";

    if($_SERVER['REQUEST_METHOD'] == 'POST') {
        $id = $_POST['id'];
        $user = $_SESSION['user'];
        $image = $_SESSION['image'];
        $title = $_POST['title'];
        $code = $_POST['code'];
        $description = $_POST['description'];
        $category = $_POST['category'];

        $update_post = "UPDATE posts SET title='$title', code='$code', description='$description', category='$category' WHERE id = '$id'";
        $resul_post = mysqli_query($conexion, $update_post);

        if($resul_post) {
            echo "success";
        } else {
            echo "fail";
        }
    }
?>
