<?php   
    session_start();
    include('conexion.php');

    if (isset($_POST['usuario']) && isset($_POST['clave']) ) {

    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $usuario = validate($_POST['usuario']); 
    $clave = validate($_POST['clave']);

    if (empty($usuario)) {
        header("Location: Index.php?error=El Usuario Es Requerido");
        exit();
    }elseif (empty($clave)) {
        header("Location: Index.php?error=La clave Es Requerida");
        exit();
    }else{

        // $clave = md5($clave);

        $Sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave='$clave'";
        $result = mysqli_query($conexion, $Sql);

        if (mysqli_num_rows($result) === 1) {
            $row = mysqli_fetch_assoc($result);
            if ($row['usuario'] === $usuario && $row['clave'] === $clave) {
                $_SESSION['usuario'] = $row['usuario'];
                $_SESSION['nombre_completo'] = $row['nombre_completo'];
                $_SESSION['id'] = $row['id'];
                header("Location: inicio.php");
                exit();
            }else {
                header("Location: index.php?error=El usuario o la clave son incorrectas");
                exit();
            }

        }else {
            header("Location: index.php?error=El usuario o la clave son incorrectas");
            exit();
        }
    }

} else {
    header("Location: index.php");
            exit();
}