<?php
    include_once("../conexion.php");

    $id = $_POST['id'];
    $Nombre = $_POST['nombre'];
    $Marca = $_POST['marca'];
    $Modelo = $_POST['modelo'];
    $Serie = $_POST['serie'];
    $Estado = $_POST['estado'];
    $Observacion = $_POST['observacion'];
    $Ambiente = $_POST['ambiente'];
    $Accesorio = $_POST['accesorio'];

    $sql = "UPDATE elementos SET nombreElementos='$Nombre', marca='$Marca', modelo='$Modelo', serie='$Serie', estado='$Estado', observacion='$Observacion', ambiente='$Ambiente', accesorio='$Accesorio' WHERE idElementos='$id'";

    $query = mysqli_query($conexion, $sql);

    if ($query) {
        header("Location: ../inicio.php");
    }

?>