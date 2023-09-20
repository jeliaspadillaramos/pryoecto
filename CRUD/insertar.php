<?php
    include_once("../conexion.php");
    
    $Nombre = $_POST['nombre'];
    $Marca = $_POST['marca'];
    $Modelo = $_POST['modelo'];
    $Serie = $_POST['serie'];
    $Estado = $_POST['estado'];
    $Observacion = $_POST['observacion'];
    $Ambiente = $_POST['ambiente'];
    $Accesorio = $_POST['accesorio'];

    $sql = "INSERT INTO elementos(nombreElementos,marca,modelo,serie,estado,observacion,ambiente,accesorio)VALUES('$Nombre', '$Marca', '$Modelo', '$Serie', '$Estado', '$Observacion', '$Ambiente', '$Accesorio')";

    $query = mysqli_query($conexion, $sql);

    if ($query ===  TRUE) {
        header("Location: ../inicio.php");
    }




?>