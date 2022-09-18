<?php 
    include "../conexion.php";

    $id = $_GET['id'];

    $delete_for_id = "DELETE FROM posts WHERE id = '$id'";
    $result_delete = mysqli_query($conexion, $delete_for_id);

    if($result_delete) {
        echo "success";
    } else {
        echo "fail";
    }
?>