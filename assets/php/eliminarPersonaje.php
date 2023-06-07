<?php
  include "connection.php";

  $id = $_REQUEST['id'];

  $sql = "DELETE FROM celulares WHERE id = $id";

  $resultado = $conexion -> query($sql);

  if ($resultado) {
    header('Location: ../../index.php');
    // echo $sql;
  }else {
    echo "No se ha eliminado el personaje";
    // echo $conexion->error;
  }
?>