<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>BLOG</title>
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
    <h1>Publicaciones del blog</h1>
    <div class="publicaciones">
      <?php
      // Conexión a la base de datos
          $conn = new PDO('mysql:host=localhost;dbname=hito', 'root', '');

          $consulta="select *from usuarios";
          $result=$conn-> query($consulta);
          while ($publicacion = $result->fetch()){
              echo "<b>Publicacion numero: ".$publicacion['id']."</b> <p>Título de la publicacion: ".$publicacion['titulo']." <br>Contenido de la publicacion: ".$publicacion['mensaje'].
              " <br>Fecha: ".$publicacion['fecha']." <br>Imágen: ".$publicacion['imagen']." <br>Publicado por:".$publicacion['email']."</p><br>";
          }
      ?>
    </div>
</body>
</html>