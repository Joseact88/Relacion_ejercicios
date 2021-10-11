<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario Alumno</title>
    <?php
        include "Funciones.php";
        $nombre="";
        $apellidos="";
        $fnac="";
        $dni="";
        $correo="";
        $url="";
        if(count($_POST)>0)
        {
            $error="";
            $errores=validaDatosAlumno();
            $nombre=($_POST['nombre']);
            $apellidos=($_POST['apellidos']);
            $fnac=($_POST['fnac']);
            $dni=($_POST['dni']);
            $correo=($_POST['correo']);
            $url=($_POST['url']);
        }
    ?>
</head>
<body>
    <form action="FormularioAlumno.php" method="POST">
        
        <label>Nombre:</label><br>
        <input type="text" id="nombre" name="nombre" value="<?php echo $nombre?>"><br>
        <?php
            if(isset($errores['nombre']))
            {
               pinta_error($errores,"nombre");
            }
        ?>
        <br><label>Apellidos:</label><br>
        <input type="text" id="apellidos" name="apellidos" value="<?php echo $apellidos?>"><br><br>
        <?php
            if(isset($errores['apellidos']))
            {
                pinta_error($errores,"apellidos");
            }
        ?>
        <br><label>Fecha Nacimiento:</label><br>
        <input type="text" id="fnac" name="fnac" value="<?php echo $fnac?>"><br><br>
        <?php
            if(isset($errores['fnac']))
            {
                pinta_error($errores,"fnac");
            }
        ?>
        <br><label>DNI:</label><br>
        <input type="text" id="dni" name="dni" value="<?php echo $dni?>"><br><br>
        <?php
            if(isset($errores['dni']))
            {
                pinta_error($errores,"dni");
            }
        ?>
        <br><label>Correo Electrónico:</label><br>
        <input type="text" id="correo" name="correo" value="<?php echo $correo?>"><br><br>
        <?php
            if(isset($errores['correo']))
            {
                pinta_error($errores,"correo");
            }
        ?>
        <br><label>Página Web:</label><br>
        <input type="text" id="url" name="url" value="<?php echo $url?>"><br><br>
        <?php
            if(isset($errores['url']))
            {
                pinta_error($errores,"url");
            }
        ?>
        <br>Intereses:<br>
        <input type="checkbox" name="cb[]" value="gusta"> Autos<br>
        <input type="checkbox" name="cb[]" value="gusta"> Deportes<br>
        <input type="checkbox" name="cb[]" value="gusta"> Videojuegos <br>
        <input type="submit" value="Enviar" id="enviar" name="enviar">
    </form> 
</body>
</html>