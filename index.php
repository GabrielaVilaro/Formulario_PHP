<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<title>Formulario</title>
	<link rel="stylesheet" type="text/css" href="css/estilo.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css"/>
	<link rel="stylesheet" href="bootstrap/css/bootstrap-theme.min.css"/>
</head>

<body>

	 <header>
	 	
	 	<div class="cabecera">
	 		
	 		<img src="img/cabecera.png">  

	 		<p> <h2> Complete el formulario para enviar el mail: </p> </h2>

	 		<p> </p>

	 	</div>

	 </header>

	 <div class="container">

	 	<form action='envio.php' method='POST' enctype='multipart/form-data' class='formulario'>
	 		<label form="direccion">
	 			Destinatario:
	 			<input type='email' name='destino' class='form-control'/>
	 		</label>
	 		<br>
	 		<label form='asunto'>
	 			Asunto:

	 			<input type='text' name='asunto' class='form-control'/>
	 		</label>
	 		<br>
	 		<label form='mensaje'>
	 			Mensaje:
	 			<textarea name='mensaje' class='form-control'> </textarea>
	 		</label>
	 		<br>
	 		<input type='submit' class='btn-success' value='Enviar'/>
</form>
	 </div>

	 <footer>
	 	
	 	<hr>

	 	&COPY; GabrielVilaró <?php echo date ('Y');?>

	 </footer>

</body>
</html>