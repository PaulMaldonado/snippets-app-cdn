<?php 
    include "../conexion.php";

    $category = $conexion->real_escape_string(htmlentities($_GET['categories']));
    $temporal = array();
    $result = array();

    $search_categories = "SELECT * FROM posts WHERE category = '$category'";
    $result_category = mysqli_query($conexion, $search_categories);

    if($result_category) {
        echo "success";
    } else {
        echo "fail";
    }
?>