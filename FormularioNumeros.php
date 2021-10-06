<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <?php
        include "Funciones.php";
        $suma="";
        $error="";
        $errores=valida();
        
        
    ?>
</head>
<body>
<form action="FormularioNumeros.php" method="POST">
    <label>Numero 1:</label><br>
    <input type="text" id="num1" name="num1"><br>
    <label>Numero 2:</label><br>
    <input type="text" id="num2" name="num2"><br><br>
    <input type="submit" value="Submit">
    <?php
    if(count($errores)==0)
    {
        $suma=$num1+$num2;
        print("$suma"); 
    }
    else
    {
        print_r($errores);
    }
                 
    ?>
</form> 
</body>
</html>