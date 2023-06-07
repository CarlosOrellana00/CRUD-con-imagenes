<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>CRUD con imagenes</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <!-- CSS Propio -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- icono -->
    <link rel="shortcut icon" href="assets/icons/icon.png">
    <!-- font-awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
  </head>
  <body>
    <div class="containter">
      <h1 class="p-3 text-center">Listado de Personajes</h1>
    </div>
    <div class="container">
      <a href="assets/views/nuevoPersonaje.php" class="btn btn-success">Agregar <i class="fa-solid fa-user-plus"></i></a>
      <hr>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">N°</th>
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
            while ($fila = $resultado->fetch_assoc()) { ?>
              <tr>
                <th scope="row"> <?php echo $fila['id']?></th>
                <th><?php echo $fila['nombre']?></th>
                <th><?php echo $fila['descripcion']?></th>
                <td><img style="width: 200px;" src="data:image/jpg;base64,<?php echo base64_encode($fila['imagen'])?>" alt=""></td>
                <td>
                  <a href="assets/views/editandoPersonaje.php?id=<?php echo $fila["id"]?>" class="btn btn-warning"> Editar <i class="fa-solid fa-user-pen"></i></a>
                  <a href="assets/php/eliminarPersonaje.php?id=<?php echo $fila["id"]?>" class="btn btn-danger">Eliminar <i class="fa-solid fa-user-xmark"></i></a>
                </td>
              </tr>
          <?php }?>
        </tbody>
      </table>
    </div>
    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
  </body>
</html>