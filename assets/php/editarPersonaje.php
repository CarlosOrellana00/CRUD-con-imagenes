<?php
  error_reporting(1);

  include "connection.php";

  $id = $_REQUEST['idEdit'];
  $nombre = $_POST['nombre'];
  $descripcion = $_POST['descripcion'];
  $imagen = addslashes(file_get_contents($_FILES['imagen']['tmp_name']));

  $sql = "UPDATE celulares SET
  nombre = '$nombre',
  descripcion = '$descripcion',
  imagen = '$imagen' WHERE Id = $id";


  $resultado = $conexion->query($sql);

  if ($resultado) {
    header('Location: ../../index.php');
  }else {
      echo "No se ha edtiado el personaje";
  }
?>