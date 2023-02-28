<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
    <title>Registro</title>
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
    <form method="post">
        <label>REGISTRO</label>
        <input type="email" name="email" placeholder="Email"></input><br>
        <input type="password" name="contraseña" placeholder="Contraseña"></input><br><br>
        <input type="submit">
    </form>
    <?php
        if (isset($_POST ['email'])&&isset($_POST['contraseña'])){
            session_start();
            $token=session_id();
            echo"has iniciado sesion con la id: ".$token." ";
        }
    ?>
</body>
</html>