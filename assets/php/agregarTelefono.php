<?php
  include "connection.php";

  $nombretelefono = $_POST["nombre"];
  $descripciontelefono = $_POST["descripcion"];
  $imagen = addcslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $sql = "INSERT INTO 'celulares' (nombre, descripcion, imagen) VALUES ('$nombretelefono','$descripciontelefono','$imagen')";

  $resultado = $conexion -> query($sql);

  if ($resultado) {
      header('Location: Index.php');
  }else {
      echo "No se insertaron los datos";
  }
?>