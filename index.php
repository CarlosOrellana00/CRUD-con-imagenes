<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD con imagenes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  </head>
  <body>
    <div class="containter">
      <br>
      <center>
        <h1>Listado de Telefonos</h1>
      </center>
      <br>
    </div>
    <div class="container">
      <a href="#" class="btn btn-dark">Agregar Telefono</a>
      <hr>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Nombre</th>
            <th scope="col">Descripcion</th>
            <th scope="col">Imagen</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php
            include 'assets/php/connection.php';
            $sql = "SELECT * FROM celulares";
            $resultado = $conexion->query($sql);

            while($file - $resultado->fetch_assoc()){ ?>

              <tr>
                <th scope="row"> <?php echo $fila['id']?></th>
                <th><?php echo $fila['nombre']?></th>
                <th><?php echo $fila['descripcion']?></th>
                <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen'])?>" alt=""></td>
                <td>
                  <a href="" class="btn btn-danger">Editar</a>
                  <a href="" class="btn btn-danger">Eliminar</a>
                </td>
              </tr>
          <?php }?>
        </tbody>
      </table>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>