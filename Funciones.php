<?php
//Mi var_dump
function mi_var_dump($a)
{
    $cadena="";
    $claves=array_keys($a);
    echo $_SERVER['DOCUMENT_ROOT'].$_SERVER['PHP_SELF'];
    echo "<br>".gettype($a)." (size=".count($a).")";
    for($i=0;$i<(count($a));$i++)
    {
        echo "<br>".$claves[$i]." => (".gettype($a[$claves[$i]]).") <spam style='color:green'>".$a[$claves[$i]]."</spam>";
    }
}
function cuenta_veces_valor($array, $valor) 
{
    $contadores = array_count_values($array);
    return $contadores[$valor];
}

/*function miArrayCountValues($array)
{
    var $nuevoArray= array();
    foreach ($array as $clave => $valor)
    {

    }
}*/
//Método que valida que lo que le pasas es un número
function valida()
{
    $errores=array();

    if(!isset($_POST['num1']))
    {
        $errores['num1']="ERROR:ESTÁ VACÍO";
    }
    elseif(!is_numeric($_POST['num1']))
    {
        $errores['num1']="ERROR:NO ES UN NÚMERO";
    }
    
    if(!isset($_POST['num2']))
    {
        $errores['num2']="ERROR:ESTÁ VACÍO";
    }
    elseif(!is_numeric($_POST['num1']))
    {
        $errores['num2']="ERROR:NO ES UN NÚMERO";
    }
    return $errores;
}

