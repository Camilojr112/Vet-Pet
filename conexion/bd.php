<?php
  $host="localhost";
  $bd="citasvet";
  $usuario="camilojr";
  $contraseña="Itachi123";
  try {
      $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
      if($conexion){echo "Conectado ... a sistema";}
  } catch(Exception $ex){
    echo$ex->getMessage();
  }
?>