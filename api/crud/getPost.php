<?php 
    include "../conexion.php";

    $json = array();
    $result = array();

    $search_all_posts = "SELECT * FROM posts ORDER BY id DESC";
    $result_posts = mysqli_query($conexion, $search_all_posts);

    while($row = mysqli_fetch_array($result_posts)) {
        $json = $row;
        array_push($result, $json);
    }

    echo json_encode($result);
?>