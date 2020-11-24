<?php

//1. Incluir el archivo BaseDatos
include("Basedatos.php");

//2. RECIBA EL ID A ELIMINAR
$id=$_GET["id"];

//3. Crear un objeto (sacar copia) de la clase BaseDatos
$transaccion= new Basedatos();

//4. crear una consulta SQL para eliminar datos
$consultaSQL="DELETE FROM productos WHERE idProducto='$id' ";

//5.  ejecute el metodo eliminarUsuario
$transaccion->eliminarDatos($consultaSQL);

//6. Redireccion a la vista que necesite
header("location:ListadoProductos.php")




?>