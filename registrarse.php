<?php
    session_start();

    include_once('conexion.php');

if (isset($_POST['usuario']) && isset($_POST['nombre_completo']) && isset($_POST['clave']) && isset($_POST['rclave'])) {
    function validar($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);

        return $data;
    }


    $usuario =  validar($_POST['usuario']);
    $nombre_completo =  validar($_POST['nombre_completo']);
    $clave =  validar($_POST['clave']);
    $rclave =  validar($_POST['rclave']);

    $usuario_Datos = 'usuario=' . $usuario . '&nombre_completo=' . $nombre_completo;
    

    if (empty($usuario)) {
        header("location: crearcuenta.php?error=El usuario es requerido&$usuarios_Datos");
        exit();
    }elseif (empty($nombre_completo)) {
        header("location: crearcuenta.php?error=El nombre completo es requerido&$usuarios_Datos");
        exit();
    }elseif (empty($clave)) {
        header("location: crearcuenta.php?error=La clave es requerida&$usuarios_Datos");
        exit();
    }elseif (empty($rclave)) {
        header("location: crearcuenta.php?error=Repetir la clave es requerida&$usuarios_Datos");
        exit();
    }elseif ($clave !== $rclave) {
        header("location: crearcuenta.php?error=Las claves no coinciden&$usuarios_Datos");
        exit();
    }else {
        //hashing
       // $clave = md5($clave);

        $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario'";
        $query = $conexion->query($sql);

        if (mysqli_num_rows($query) > 0) {
            header("location: crearcuenta.php?error=El nombre de usuario ya existe&$usuarios_Datos");
            exit();
        }else {
            $sql2 = "INSERT INTO usuarios(nombre_completo, usuario, clave) VALUES ('$nombre_completo','$usuario','$clave')";
            $query2 = $conexion->query($sql2);

            if ($query2) {
                header("location: crearcuenta.php?success=Usuario creado con exito!&$usuarios_Datos");     
                exit();
            }else {
                header("location: crearcuenta.php?error=Error desconocido&$usuarios_Datos");
                exit();
            }
        }
    }

}else {
    header("location: crearcuenta.php");
    exit();
}