<?php
	require_once('funciones.php');
	// Variables para persistencia
	$email = '';

	// Array de errores vacío
	$errores = [];

	// Si envían algo por $_POST
	if ($_POST) {
		$email = trim($_POST['email']);

		$errores = validarLogin($data);

		if (empty($errores)) {
			//logueo al usuario

		if (isset($_POST['recordar'])) {
			//recordar al usuario
		}

		header('location:exito.php?estado=login');


		}

	}
?>
<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>Formulario</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/style.css">
	</head>
   <body>
		<?php if (!empty($errores)): ?>
			<div class="div-errores alert alert-danger">
				<ul>
					<?php foreach ($errores as $value): ?>
					<li><?=$value?></li>
					<?php endforeach; ?>
				</ul>
			</div>
		<?php endif; ?>

		<div class="data-form">
			<form  method="post" enctype="multipart/form-data">
				<div class="row">
					<div class="col-sm-6">
						<div class="form-group">
							<label for="name">Email:</label>
							<input class="form-control" type="text" name="email" value="<?=$email?>">
							<?php if (isset($errores['email'])): ?>
								<span style="color: red;">
									<b class="glyphicon glyphicon-exclamation-sign"></b>
									<?=$errores['email'];?>
								</span>
							<?php endif; ?>
		            </div>
					</div>
					<div class="col-sm-6">
						<div class="form-group">
							<label for="name">Contraseña:</label>
							<input class="form-control" type="text" name="pass" value="">
							<?php if (isset($errores['pass'])): ?>
								<span style="color: red;">
									<b class="glyphicon glyphicon-exclamation-sign"></b>
									<?=$errores['pass'];?>
								</span>
							<?php endif; ?>
		            </div>
					</div>
				</div>

				<div class="row">
					<div class="col-sm-12">
						<div class="form-group">
							<input type="checkbox" name="recordar">
							Recordar
						</div>
					</div>
				</div>

            <button class="btn btn-primary" type="submit">Enviar</button>
        </form>
	  	</div>
   </body>
</html>
