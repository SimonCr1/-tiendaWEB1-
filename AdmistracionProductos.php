<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="estilos.css">
    <link rel="icon" type="image/png" href="https://github.com/SimonCr1/fotosviernes6am/blob/main/controller.png?raw=true"  >


<style>
</style>

</head>
<body >
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




<div class="container"  >
    <form action="RegistroProductos.php" method="POST">
      <h1 class="white" >GameStore</h1>

    <div class="row">

          <div class="form-group col-md-6"  >
            <label class="white"> Nombre del Producto</label>
            <input type="text" class="form-control"  name="nombre">
          </div>
    
          <div class="form-group col-md-6"  >
            <label class="white">Marca del Producto</label>
            <input type="text" class="form-control"  name="marca">
          </div>
    </div>   

    <div class="row">
      
        <div class="form-group col-md-6"  >
          <label class="white"> Precio del Producto</label>
          <input type="text" class="form-control"  name="precio">
        </div>

        <div class="form-group col-md-6"  >
          <label class="white">Foto</label>
          <input type="text" class="form-control" name="foto">
        </div>
    </div>   

    <div  class="row mt-3" >
        <div class="col"   >
          <label  class="white" >Descripcion del Producto</label>
          <textarea  type="text" class="form-control"  name="descripcion"></textarea>
        </div>
    </div>
<br>
      <button type="submit" class="btn btn-dark btn-block" name="botonEnvio">Registrar</button>

  </form>
</div>



<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>     
</body>
</html>