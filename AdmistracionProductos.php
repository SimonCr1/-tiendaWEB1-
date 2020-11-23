<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Game-Store</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

<style>

nav{
  background-color: darkblue;
}

h1{
    text-align: center;
}

body{
    background-color: lightblue;
    background-image: url("https://mdn.mozillademos.org/files/11991/startransparent.gif");
}

a{
    color: black;
}

</style>

</head>
<body >
<nav class="navbar navbar-expand-lg " >
  <a class="navbar-brand" href="#">Navbar</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="#">Link</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Dropdown
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Action</a>
          <a class="dropdown-item" href="#">Another action</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>

<div class="container">
<form action="RegistroProductos.php" method="POST">
    <h1 >GameStore</h1>
  <div class="form-row">
    <div class="form-group col-md-6">
      <label> Nombre del Producto</label>
      <input type="text" class="form-control"  name="nombre">
    </div>
    <div class="form-group col-md-6">
      <label>Marca del Producto</label>
      <input type="text" class="form-control"  name="marca">
    </div>
    <div class="form-group col-md-6">
      <label> Precio del Producto</label>
      <input type="text" class="form-control"  name="precio">
    </div>
    <div class="form-group col-md-6">
      <label>Descripcion del Producto</label>
      <input type="text" class="form-control"  name="descripcion">
    </div>
    <div class="form-group col-md-6">
      <label>Foto</label>
      <input type="text" class="form-control" name="foto">
    </div>
 
    <button type="submit" class="btn btn-info btn-block" name="botonEnvio">Registrar</button>
</form>
</div>


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>     
</body>
</html>