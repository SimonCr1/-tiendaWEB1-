<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LISTADO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/png" href="https://github.com/SimonCr1/fotosviernes6am/blob/main/controller.png?raw=true" >

    <style>
    </style>

</head>
<body>
<nav class="navbar navbar-expand-lg " >
  <a class="navbar-brand" href="#"></a>
  <img src="https://github.com/SimonCr1/fotosviernes6am/blob/main/controller.png?raw=true" width="50" height="50" >
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>

        <li class="nav-item active">
          <a class="nav-link" href="AdmistracionProductos.php">Registrar<span class="sr-only">(current)</span></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href=""></a>
        </li>

        <li class="nav-item">
          <a class="nav-link" href="ListadoProductos.php">Listado</a>
        </li>
        
       
    </ul>
    
  
  </div>
</nav>



    <?php 
        
        include("Basedatos.php");
        
        //1. crear una copia de la clase BD
        //crear un objeto de la clase bd
        $transaccion=new Basedatos();

        //2.Crear la consulta para buscar datos
        $consultaSQL="SELECT * FROM productos WHERE 1";

        //3.Utilizar el metodo consultarDatos
        $productos=$transaccion->consultarDatos($consultaSQL);

        
    
    ?>
<br>
    <div class="container">

        <div class="row row-cols-1 row-cols-md-3">

            <?php foreach($productos as $producto):?>

                <div class="col mb-4">

                        <div class="card ">

                            <img src="<?php echo($producto["foto"])?>" class="card-img-top" alt="FOTO">
                            <div class="card-body">
                                <h5 class="card-title"><?php echo($producto["nombre"])?></h5>
                                <p class="card-text"><?php echo($producto["descripcion"])?></p>
                                <a href="EliminarProductos.php?id=<?php echo($producto["idProducto"])?>" class="btn btn-danger">Eliminar</a>
                                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#editar<?php echo($producto["idProducto"])?>">Editar</button>
                            </div>
                        </div>
                    
                    <!-- MODAL -->
                    <div class="modal fade" id="editar<?php echo($producto["idProducto"])?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Edición de Productos</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                <form action="EditarProductos.php?id=<?php echo($producto["idProducto"])?>" method="POST">

                                        <div class="form-group">
                                            <label >Nombre:</label>
                                            <input type="text" class="form-control" name="nombreEditar" value="<?php echo($producto["nombre"])?>" >
                                        </div>

                                        <div class="form-group">
                                            <label >Marca: </label>
                                            <input type="text" class="form-control" name="marcaEditar" value="<?php echo($producto["marca"])?>" >
                                        </div> 

                                        <div class="form-group">
                                            <label >Precio: </label>
                                            <input type="text" class="form-control" name="precioEditar" value="<?php echo($producto["precio"])?>" >
                                        </div>

                                        <div class="form-group">
                                            <label > Foto: </label>
                                            <input type="text" class="form-control" name="fotoEditar" value="<?php echo($producto["foto"])?>" >
                                        </div>

                                        <div class="form-group">
                                            <label >Descripción</label>
                                            <textarea class="form-control"rows="3" name="descripcionEditar" ><?php echo($producto["descripcion"])?></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-primary" name="botonEditar">Editar</button>           
                                    </form>
                                </div>
                            </div>
                        </div>
                        </div>
                            
</div>


            <?php endforeach?>

            

        </div>


    </div>

  
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>  
</body>
</html>