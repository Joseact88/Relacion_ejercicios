<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
        include "Funciones.php";
    ?>
</head>
<body>
    <?php
        $numeros=array();
        while (count($numeros)<20) 
        {
            $num_aleatorio = rand(1,100);
            if (!in_array($num_aleatorio,$numeros)) 
            {
                array_push($numeros,$num_aleatorio);
            }
        }
        sort($numeros);
        echo mi_var_dump ($numeros);
        
        $viajes= array
        (
            0 => "Alberto",
            1 => "Juan",
            2 => "Ramón",
            3 => "Juan",
            4 => "Alberto",
            5 => "Ramón",
            6 => "Juan",
            7 => "Alberto",
            8 => "Ramón"
        );
        var_dump (cuenta_veces_valor($viajes,"Juan"));
    ?>
    
</body>
</html>