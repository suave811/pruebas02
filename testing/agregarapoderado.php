 <!DOCTYPE html>
 <html lang="en">
 <head>
  <meta charset="UTF-8">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>

  

<LINK REL=StyleSheet HREF="css/estilo.css" TYPE="text/css" MEDIA=screen>

  
</head>
<body>
<div class="container">
<h1>Registro de Apoderado</h1>
<div class="progress">
  <div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="0" aria-valuemax="100"></div>
</div>


<form id="regiration_form"  action="agregar.php"  method="post">


  <h2>Paso 1: Crear su cuenta</h2>
  <div class="form-group">
  <label for="email">Email</label>
  <input type="email" class="form-control" id="email" name="data[email]" placeholder="Email">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Password</label>
  <input type="password" class="form-control" id="password" placeholder="Password">
</div>
<div class="form-group">
  <label for="exampleInputPassword1">Repetir Password</label>
  <input type="password" class="form-control"  placeholder="Password">
</div>

  <h2> Paso 2: Agregar detalles personales</h2>
  <div class="form-group">
  <label for="fName">Nombres</label>
  <input type="text" class="form-control" name="data[fName]" id="fName" placeholder="Nombres">
</div>
<div class="form-group">
  <label for="lName">Apellidos</label>
  <input type="text" class="form-control" name="data[lName]" id="lName" placeholder="Apellidos">
</div>
<div class="form-group">
  <label for="Arut">RUT</label>
  <input type="text" class="form-control" name="data[Arut]" id="Arut" placeholder="Rut de apoderado">
</div>
<div class="form-group">
  <label for="Edad">Fecha de nacimiento</label>
  <input type="date" class="form-control" name="data[Fedad]" id="Fedad" placeholder="Fecha de nacimiento">
</div>

  
  <h2>Paso 3: Información de contacto</h2>
  <div class="form-group">
  <label for="mob">Numero Celular</label >
  <input type="number" class="form-control" id="mob" name="data[mob]" placeholder="Numero Celular">
</div>
<div class="form-group">
  <label for="address">Direccion</label>
  <textarea  class="form-control" name="data[address]" id = "dire"placeholder="Direccion"></textarea>
</div>
<div class="form-group">
  <label for="mob">Comuna</label >
  <input type="text" class="form-control" id="com" name="data[comu]" placeholder="Comuna">
  </div>


  <input type="button" name="previous" class="previous btn btn-default" value="cancelar" />
  <input type="submit"  class="submit btn btn-success" value="Registrar" />

  
</form>


</div>
</body>
</html>

