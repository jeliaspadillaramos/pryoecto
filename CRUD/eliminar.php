<?php
    include_once("../conexion.php");

    $id = $_REQUEST['id'];
    $sql = "DELETE FROM elementos WHERE idElementos = '$id'";
    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location:../inicio.php");
    }
?>