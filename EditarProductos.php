<?php

    include("Basedatos.php");

    if (isset($_POST["botonEditar"])){   
 
        //1. recibir los datos
        $nombre=$_POST["nombreEditar"];
        $marca=$_POST["marcaEditar"];
        $descripcion=$_POST["descripcionEditar"];
        $precio=$_POST["precioEditar"];
        $foto=$_POST["fotoEditar"];
  
        //2. Recibir el id del usuario a editar
        $id=$_GET["id"];
        

        //3. Crea un objeto (sacar copia) de la clase Basedatos
        $transaccion = new Basedatos();

        //4. Crear una consulta SQL para eliminar datos
        $consultaSQL="UPDATE productos SET nombre= '$nombre',marca='$marca', descripcion='$descripcion',precio='$precio', foto='$foto' WHERE idProducto ='$id' ";

        //5. Ejecutar el metodo editarUsuario

        $transaccion->editarDatos($consultaSQL);

        //6. Redireccion a la vista que necesite
        header("location:ListadoProductos.php");

            
               
    }

?>