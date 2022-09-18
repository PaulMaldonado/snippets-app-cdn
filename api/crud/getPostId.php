<?php 
    include "../conexion.php";


    $id = $conexion->real_escape_string(htmlentities($_GET['id']));

    $temporal = array();
    $result = array();

    $search_for_id = "SELECT * FROM posts WHERE id = '$id'";
    $result_for_id = mysqli_query($conexion, $search_for_id);

    if($row = mysqli_fetch_array($result_for_id)) {
        $temporal = $row;

        array_push($result, $temporal);
    }

    echo json_encode($result[0]);
?>