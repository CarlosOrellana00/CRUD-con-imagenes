<?php
  include "connection.php";

  $nombretelefono = $_POST["nombre"];
  $descripciontelefono = $_POST["descripcion"];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $sql = "INSERT INTO celulares (nombre, descripcion, imagen) VALUES ('$nombretelefono','$descripciontelefono','$imagen')";

  $resultado = $conexion->query($sql);

  if ($resultado) {
    header('Location: ../../index.php');
    // echo $sql;
  }else {
    echo "No se ha podido agregar el personaje";
    // echo $conexion->error;
  }
?>