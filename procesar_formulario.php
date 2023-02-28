<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>conexion</title>
</head>
<body>
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="formulario.html">Formulario</a></li>
    <li><a href="mostrarpost.php">Publicaciones</a></li>
    <li><a href="register.php">Registro</a></li>
  </ul>
</nav>

	<h1>Ip que se ha conectado</h1>
	<p class="conexion">La dirección IP del usuario es: <?php echo $_POST["ip"]; ?></p>
  <p class="conexion">El nombre del ordenador que se ha conectado es: <?php echo $_POST["nombre"];?></p>
	<p class="conexion">La fecha de acceso es: <?php echo $_POST["fecha"]; ?></p>
</body>
</html>
