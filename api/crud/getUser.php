<?php 
    include "../conexion.php";

    $currentUser = $_SESSION['user'];

    echo json_encode($currentUser);
?>