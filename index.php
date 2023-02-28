<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <title>Hito</title>
</head>
<body>
<?php setcookie('ip', $_SERVER['REMOTE_ADDR']); 
?>
<?php setcookie('fecha', date('Y-m-d H:i:s')); 
?>
<nav>
  <ul>
    <li><a href="index.php">Home</a></li>
    <li><a href="formulario.html">Formulario</a></li>
    <li><a href="mostrarpost.php">Publicaciones</a></li>
    <li><a href="register.php">Registro</a></li>
  </ul>
</nav>

    <header>
        <h1>ITEM 1</h1>
        <h3>Diferencias entre lenguajes de programación orientada a objetos, a eventos y lenguajes procedimentales</h3>
        <p>Los lenguajes de programación pueden ser clasificados en diferentes categorías según la forma en que están organizados y estructurados. Aquí se explican las diferencias entre tres de estas categorías: lenguajes de programación orientados a objetos, orientados a eventos y procedimentales.</p>

            <p class="titulos">Lenguajes de programación orientados a objetos:</p>

            <p>En los lenguajes de programación orientados a objetos, se utiliza el concepto de "objetos" para organizar el código. Un objeto es una instancia de una clase que tiene propiedades y métodos, y los objetos pueden interactuar entre sí enviando y recibiendo mensajes.</p>

            <p class="titulos">Los lenguajes de programación orientados a objetos tienen cuatro características principales:</p>

            <p>Abstracción: permite modelar entidades del mundo real como objetos con características y comportamientos.
            Encapsulamiento: los datos y métodos que pertenecen a un objeto se mantienen protegidos y no pueden ser accedidos por otros objetos de manera directa.
            Herencia: permite crear nuevas clases a partir de otras ya existentes, aprovechando su funcionalidad y añadiendo nuevas características.
            Polimorfismo: permite que distintos objetos de la misma clase respondan de manera diferente a los mismos mensajes.
            Algunos ejemplos de lenguajes de programación orientados a objetos son Java, C++, Python, Ruby, y C#.</p>

            <p class="titulos">Lenguajes de programación orientados a eventos:</p>

            <p>En los lenguajes de programación orientados a eventos, el programa se organiza en torno a eventos que ocurren en el sistema, como la pulsación de una tecla, un clic en un botón, o la recepción de datos por parte de una red. Los eventos desencadenan la ejecución de funciones específicas que están diseñadas para manejarlos.</p>

            <p class="titulos">Los lenguajes de programación orientados a eventos tienen tres características principales:</p>

            <p>Reactividad: los programas pueden responder a eventos de manera rápida y eficiente.
            Modularidad: los programas se dividen en módulos que están diseñados para responder a eventos específicos.
            Paralelismo: los programas pueden manejar varios eventos simultáneamente sin interrupciones.
            Algunos ejemplos de lenguajes de programación orientados a eventos son JavaScript, C#, Visual Basic, y Smalltalk.</p>

            <p class="titulos">Lenguajes de programación procedimentales:</P>

            <p>En los lenguajes de programación procedimentales, el programa se organiza en torno a procedimientos o funciones que realizan tareas específicas. Los procedimientos se ejecutan en un orden determinado y pueden recibir y devolver valores.</p>

            <p class="titulos">Los lenguajes de programación procedimentales tienen tres características principales:</p>

            <p>Estructuración: los programas se dividen en procedimientos que pueden llamarse entre sí para realizar tareas complejas.
            Modularidad: los programas se organizan en módulos que realizan tareas específicas.
            Control de flujo: los programas pueden tomar decisiones y realizar iteraciones en base a condiciones lógicas.
            Algunos ejemplos de lenguajes de programación procedimentales son C, Fortran, Pascal, y Basic.</p>
        </p>
    </header>
    <footer>
        <h1 class="cursiva">Conexión mediante ip</h1>
        <div class="contenedor">
            <form method="post" action="procesar_formulario.php">
                <label for="ip">Dirección IP:</label>
                <input type="text" name="ip" id="ip" value="<?php echo $_SERVER['REMOTE_ADDR']; ?>" readonly><br><br>

                <label for="ip">Nombre del ordenador:</label>
                <input type="text" name="nombre" id="nombre" value=""><br><br>

                <label for="fecha">Fecha de acceso:</label>
                <input type="text" name="fecha" id="fecha" value="<?php echo date('Y-m-d H:i:s'); ?>" readonly><br><br>
                <input type="submit" value="Enviar">
            </form>
        </div>
    </footer>
</body>
</html>