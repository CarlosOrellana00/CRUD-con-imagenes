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
   <!-- font-awesome -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
  <div class="container">
    <h1 class="p-3 text-center">Nuevo Personaje</h1>
    <form action="../php/agregarPersonaje.php" method="POST" enctype="multipart/form-data">
      <div class="mb-3">
        <label class="form-label">Nombre Personaje</label>
        <input type="text" class="form-control" name="nombre">
      </div>
      <div class="mb-3">
        <label class="form-label">Descripcion</label>
        <input type="text" class="form-control" name="descripcion">
      </div>
      <div class="mb-3">
        <label class="form-label">Imagen</label>
        <input type="File" class="form-control" name="imagen" required>
      </div>
        <button type="submit" class="btn btn-success">Agregar Personaje <i class="fa-solid fa-floppy-disk"></i></button>
        <a href="../../index.php" class="btn btn-info">Regresar a la lista <i class="fa-solid fa-arrow-left-long"></i></a>
    </form>

  </div>
  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
</body>
</html>