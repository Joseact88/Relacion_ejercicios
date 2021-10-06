<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Respuesta de formulario</title>
    <?php
        include "Funciones.php";
    ?>
</head>
<body>
    <p>
        <?php
        if(validaNumero($_POST['num1']) && validaNumero($_POST['num2']))
        {
            $num1=($_POST['num1']);
            $num2=($_POST['num2']);
            $suma=$num1+$num2;
            print_r("$suma");
        }
        else
        {
            header("location:FormularioNumeros.php");
        }
            
        ?>
    </p>
</body>
</html>