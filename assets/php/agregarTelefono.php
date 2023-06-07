<?php
  include "connection.php";

  $nombretelefono = $_POST["Nombre"];
  $descripciontelefono = $_POST["Descripcion"];
  $imagen = addslashes(file_get_contents($_FILES['Imagen']['tmp_name']));

  $sql = "INSERT INTO celulares (nombre, descripcion, imagen) VALUES ('$nombretelefono','$descripciontelefono','$imagen')";

  // robert','1'); drop table celulares; --

  $resultado = $conexion->query($sql);

  if ($resultado) {
    header('Location: ../../index.php');
    echo $sql;
  }else {
    echo $conexion->error;
  }
?>