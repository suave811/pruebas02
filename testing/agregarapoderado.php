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


<form action="agregar.php" class="formulario" id="formulario" method = "post">




  <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Nombre</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="usuarion" id="usuarion" placeholder="john123">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

      <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Apellido</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="apellido" id="apellido" placeholder="john123">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

      <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Correo</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="correo" id="correo" placeholder="john@123">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>


      <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Rut</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="rut" id="rut" placeholder="1234567-8">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

      <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Fecha de nacimiento</label>
				<div class="formulario__grupo-input">
					<input type="date" class="formulario__input" name="fnacimiento" id="fnacimiento">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>
  

  <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Numero telefono</label>
				<div class="formulario__grupo-input">
					<input type="number" class="formulario__input" name="numerote" id="numerote" placeholder="12345678">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

      <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Direccion</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="direc" id="direc" placeholder="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>

      <div class="formulario__grupo" id="grupo__usuario">
				<label for="usuario" class="formulario__label">Comuna</label>
				<div class="formulario__grupo-input">
					<input type="text" class="formulario__input" name="comuna" id="comuna" placeholder="">
					<i class="formulario__validacion-estado fas fa-times-circle"></i>
				</div>
				<p class="formulario__input-error">El usuario tiene que ser de 4 a 16 dígitos y solo puede contener numeros, letras y guion bajo.</p>
			</div>


      <a href="Login.php" class="formulario__btn2">cancelar</a>
  <button type="submit" class="formulario__btn">Registrar</button>

  
</form>


</div>
</body>
</html>

