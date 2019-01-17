<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
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
        <a class="nav-link disabled" href="#">Disabled</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
  <div class="container">
  <div class="row justify-content-center">
  <div class="col-lg-6 col-md-6 col-sm-12">
   <form method="POST" action="proceso.php">
  <div class="form-group">
     <h1>Mi primer Formulario :v</h1>
    <label for="exampleInputEmail1">Nombre</label>
    <input type="nombre" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="nombre">
  </div>
  <div class="form-group">
  <label for="#">Ocupación</label>
  <select class="form-control">
  <option value="sistemas">Ing De Sistemas</option>
  <option value="administracion">Administracion</option>
  <option value="turismo">Turismo</option>
  <option value="agronomia">Agronomia</option>
  </select>
  </div>
  
  <div class="form-group">
  <label for="#">Sexo</label>
  <div class="form-check">
    <input type="radio" name="optionsexo" class="form-check-input" id="exampleCheck1" value="option1">
    <label class="form-check-label" for="exampleCheck1">Hombre</label>
  </div>
  <div class="form-check">
    <input type="radio" name="optionsexo" class="form-check-input" id="exampleCheck2" value="option2">
    <label class="form-check-label" for="exampleCheck2">Mujer</label>
  </div>
  </div>
  <div class="from-group">
  <label >Acerca de mi</label>
  <textarea name="acerca_de_mi" class="form-control"></textarea>
  </div>

  <div class="form-gruop ">

    <h4>Ingrese os datos de sus hijos</h4>
    <?php for($i=0; $i <=4 ; $i++): ?>
    <div class="row">
    <div class="col-xs-8">
    <div class="from-group">
    <label for="hijo">Hijo N° <?php echo $i+1; ?></label>
    <input type="text" name="hijo[][mombre]" class="form-control"/>
    </div>
    </div>
    <div class="col-xs-4">
    <div class="from-group">
    <label for="hijo">Edad <?php echo $i; ?></label>
    <input type="text" name="hijo[<?php echo $i ?>][edad]" class="form-control"/>
    </div>
    </div>
    </div>
    
<?php endfor;?>
  </div>

  

  <div class="form-group">
  <div class="form-check">
  <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
  <label class="form-check-label" for="defaultCheck1">
    Acepto las condiciones de registro 
  </label>
</div>
  </div>
  
  <button type="submit"  class="btn btn-primary">Enviar</button>
</form>
    </div>
</div>
</div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>



</body>
</html>