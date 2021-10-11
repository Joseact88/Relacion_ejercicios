<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <?php
        include "Funciones.php";
        $num1="";
        $num2="";

        if(count($_POST)>0)
        {
            $operacion="";
            $error="";
            $errores=validaNumeros();
            $num1=($_POST['num1']);
            $num2=($_POST['num2']);
        }  
    ?>
</head>
<body>
<form action="FormularioNumeros.php" method="POST">
    <label>Numero 1:</label><br>
    <input type="text" id="num1" name="num1" value="<?php echo is_numeric($num1) ? $num1: ''?>"><br>
    <label>Numero 2:</label><br>
    <input type="text" id="num2" name="num2" value="<?php echo is_numeric($num2) ? $num2: ''?>"><br><br>
    <input type="submit" value="Sumar" id="sumar" name="sumar">
    <input type="submit" value="Restar" id="restar" name="restar">
    <input type="submit" value="Multiplicar" id="multiplicar" name="multiplicar">
    <input type="submit" value="Dividir" id="dividir" name="dividir">
    <?php
    if(isset($errores))
    {
        if(count($errores)==0)
        {
            if(isset($_POST['sumar']))
            {
            $operacion=$num1+$num2;
            echo("La suma es ".$operacion); 
            }
            if(isset($_POST['restar']))
            {
            $operacion=$num1-$num2;
            print("La resta es $operacion"); 
            }
            if(isset($_POST['multiplicar']))
            {
            $operacion=$num1*$num2;
            print("La multiplicación es $operacion"); 
            }
            if(isset($_POST['dividir']))
            {
            $operacion=$num1/$num2;
            print("La división es $operacion"); 
            }
        }
        else
        {
            print_r($errores);
        }
    }
    ?>
</form> 
</body>
</html>