<?php
    include_once("../conexion.php");
    $id = $_REQUEST['id'];

    $sql = "SELECT * FROM elementos where idElementos = '$id'";

    $query = mysqli_query($conexion, $sql);

    $fila = mysqli_fetch_array($query);

?>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Editar Equipos</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
  </head>
  <body>
    <h1 class="bg-warning p-2 text-white text-center">Editar Equipo</h1>
    <br>

    <div class="container">
    <form action="../CRUD/editar.php" method="POST">
        <input type="Hidden" name="id" value="<?php echo $fila['idElementos'] ?>">
  <div class="mb-3">
    <label class="form-label">NOMBRE</label>
    <input type="text" class="form-control" placeholder="Digite el Nombre del Equipo" name="nombre" value="<?php echo $fila['nombreElementos']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">MARCA</label>
    <input type="text" class="form-control" placeholder="Digite la Marca del Equipo" name="marca" value="<?php echo $fila['marca']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">MODELO</label>
    <input type="text" class="form-control" placeholder="Digite el Modelo del Equipo" name="modelo" value="<?php echo $fila['modelo']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">SERIE</label>
    <input type="text" class="form-control" placeholder="Digite el Serial del Equipo" name="serie" value="<?php echo $fila['serie']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">ESTADO</label>
    <input type="text" class="form-control" placeholder="Digite el Estado del Equipo" name="estado" value="<?php echo $fila['estado']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">OBSERVACION</label>
    <input type="text" class="form-control" placeholder="Digite las Observaciones del Equipo" name="observacion" value="<?php echo $fila['observacion']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">AMBIENTE</label>
    <input type="text" class="form-control" placeholder="Digite el Salon donde se Encuentra el Equipo" name="ambiente" value="<?php echo $fila['ambiente']?>">
  </div>
  <div class="mb-3">
    <label class="form-label">ACCESORIO</label>
    <input type="text" class="form-control" placeholder="Digite los Accesorios que tiene el Equipo" name="accesorio" value="<?php echo $fila['accesorio']?>">
  </div>
  <div class="container text-center">
  <button type="submit" class="btn btn-primary">Agregar</button>
  <a href="../inicio.php" class="btn btn-dark">Regresar</a>
  </div>
    </form>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
  </body>
</html>