<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <!-- icono -->
  <link rel="shortcut icon" href="assets/icons/icon.png">
</head>
<body>
  <div class="container">
    <br>
      <h1>Nuevo Telefono</h1>
    <br>
    <form action="agregarTelefono.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label for="exampleInputEmail1" class="form-label">Nombre Telefono</label>
        <input type="text" class="form-control" id="exampleInputEmail1" name="Nombre">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="Descripcion">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Imagen</label>
        <input type="File" class="form-control" name="Imagen">
      </div>
        <button type="submit" class="btn btn-primary">Enviar</button>
        <a href="../../index.php" class="btn btn-info">Regresar</a>
    </form>

  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>