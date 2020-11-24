<?php

include("Basedatos.php");

if (isset($_POST["botonEnvio"])){   
 
 
 $nombre=$_POST["nombre"];
 $marca=$_POST["marca"];
 $descripcion=$_POST["descripcion"];
 $precio=$_POST["precio"];
 $foto=$_POST["foto"];


 $transaccion=new Basedatos();

 $consultaSQL="INSERT INTO productos(nombre, marca, precio, descripcion, foto) VALUES ('$nombre','$marca', '$precio', '$descripcion','$foto')";
 
 $transaccion->agregarDatos($consultaSQL);
 
}

header("location:AdmistracionProductos.php")

 ?>