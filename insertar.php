<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Document</title>
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

<?php
// Crear una conexión
$conn = new PDO('mysql:host=localhost;dbname=hito', 'root', '');

// Recoger los datos del formulario
$titulo = $_POST['titulo'];
$email = $_POST['email'];
$mensaje = $_POST['mensaje'];
$fecha = $_POST['fecha'];
$imagen= $_POST['imagen'];

// Insertar los datos en la tabla correspondiente
$sql = "INSERT INTO usuarios (id, titulo, email, mensaje, fecha, imagen) VALUES (null, '$titulo', '$email', '$mensaje', '$fecha', '$imagen')";

if ($conn->query($sql) === TRUE) {
  echo "Los datos se han insertado correctamente";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}


header('location: mostrarpost.php');
?>


</body>
</html>