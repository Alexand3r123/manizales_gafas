<?php session_start(); ?>
<html>

<head>
	<title>Formulario de Registro</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link href="public/lib/font-awesome/css/font-awesome.css" rel="stylesheet">
	<link href="public/lib/Ionicons/css/ionicons.css" rel="stylesheet">
	<link rel="stylesheet" href="public/css/bracket.css">
	<link rel="stylesheet" href="css/stylos.css">
</head>
<style>
	body {
		background: rgb(62, 157, 20);
		background: linear-gradient(0deg, rgba(62, 157, 20, 0.9836309523809523) 0%, rgba(0, 0, 0, 1) 100%);
	}
</style>

<body>

	<div class="d-flex align-items-center justify-content-center ht-100v">
		<form role="form" name="login" action="php/login.php" method="post">
			<div class="login-wrapper wd-500 wd-xs-350 pd-50 pd-xs-40 bg-white rounded shadow-base">

				<!-- <div class="row">
					<div class="col-md-6">
						<h2>Login</h2>


						<div class="form-group">
								<label for="username">Nombre de usuario o email</label>
								<input type="text" class="form-control" id="username" name="username" placeholder="Nombre de usuario">
							</div>
							<div class="form-group">
								<label for="password">Contrase&ntilde;a</label>
								<input type="password" class="form-control" id="password" name="password" placeholder="Contrase&ntilde;a">
							</div>

							<button type="submit" class="btn btn-primary">Acceder</button>
						</div> -->
						<div class="signin-logo tx-center tx-28 tx-bold tx-inverse">IKÜEYE <span class="text-success">WEAR</span></div>
						<div class="escudo-login"><img src="models/escudo.png" alt=""></div>

						<div class="tx-center mg-b-30">En Busca de lo Increible!</div>

						<div class="form-group">
						<label for="username">Nombre de usuario o email</label>
							<input type="text" id="username" name="username" class="form-control" placeholder="Ingrese Correo Electronico">
						</div>
						<div class="form-group">
						<label for="password">Contrase&ntilde;a</label>
							<input type="password" id="password" name="password" class="form-control" placeholder="Contrase&ntilde;a">
						</div>
						<input type="hidden" name="enviar" class="form-control" value="si">
						<button type="submit" class="btn btn-info btn-block bg-success text-white">Acceder</button>
						<a href="registro.php" > Registro </a>
					</div>
			
		</form>
		
	</div>
	</div>
	</div>
	</div>
	<script src="js/valida_login.js"></script>
	<script src="public/lib/jquery/jquery.js"></script>
	<script src="public/lib/popper.js/popper.js"></script>
	<script src="public/lib/bootstrap/bootstrap.js"></script>
</body>

</html>