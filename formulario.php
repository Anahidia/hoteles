<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
   
</head>
<body>
<header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.html">inicio</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
              <a class="nav-item nav-link" href="jujuy.html">Jujuy</a>
                <a class="nav-item nav-link" href="salta.html">Salta</a>
                <a class="nav-item nav-link" href="tucuman.html">tucuman</a>
                <a class="nav-item nav-link" href="formulario.php">Reservar</a>
              </div>
          
          </nav>
    </header>

    <form method="post">
    <div class="container">
        <div class="row">
        <div class="col"></div> 
        <div class="form-group col-md-4">
    <label for="fechai">Fecha de Ingreso</label>
    <input type="date" class="form-control" id="fechai">
    </div>
    <div class="col"></div>
    </div>
    <div class="col"></div>
    <div class="row">
        <div class="col"></div> 
        <div class="form-group col-md-4">
    <label for="fechas">Fecha de Salida</label>
    <input type="date" class="form-control" id="fechas">
    </div>
    <div class="col"></div>
    </div>
    <div class="col"></div>
    

        <div class="row">
            <div class="col"></div>
            
        <div class="form-group col-md-4">
            <label for="destino">Seleccione Un Destino</label>
            <select class="form-control form-control-sm" id="destino"  >
                <option>Seleccione</option>
                <option>Jujuy</option>
                <option>Salta</option>
                <option>Tucuman </option>
               
              </select>
                  </div>
                  <div class="col"></div>
</div>
<div class="col"></div>
</div>
<div class="container">
    <div class="row">
        <div class="col"></div>
    <div class="form-group col-md-4">
<label for="Nombre">Nombre Completo</label>
<input type="text" id="Nombre"  class="form-control">

</div>
<div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="form-group col-md-4">
<label for="Correo">Correo</label>
<input type="email" id="Correo"  class="form-control">
</div>
<div class="col"></div>
</div>
<div class="row">
    <div class="col"></div>
    <div class="form-group col-md-4">
    <label for="telefono">Telefono</label>
    <input type="tel" id="telefono"  class="form-control" >
</div>
<div class="col"></div>
</div>

<div class="row">
    <div class="col"></div>
    <div class="col">
<button type="submit" class="btn btn-primary btn-lg" name="enviar" id="enviar">Enviar</button>
<button type="reset" class="btn btn-primary btn-lg"name="eliminar" >Eliminar</button>
</div>
<div class="col"></div>
</div>    
</div>



</form>
<?php
include ('reserva.php');
?>


</body>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</html>