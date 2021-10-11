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
function validaNumeros()
{
    $errores=array();

    if($_POST['num1']=="")
    {
        $errores['num1']="ERROR:ESTÁ VACÍO";
    }
    else
    {
        if(!is_numeric($_POST['num1']))
        {
            $errores['num1']="ERROR:NO ES UN NÚMERO";
        }
    }
    if($_POST['num2']=="")
    {
        $errores['num2']="ERROR:ESTÁ VACÍO";
    }
    else
    {
        if(!is_numeric($_POST['num2']))
        {
            $errores['num2']="ERROR:NO ES UN NÚMERO";
        }
    }
    return $errores;
}

function validaDatosAlumno()
{
    $patronFecha="/^(0[1-9]|[1-2]\d|3[0-1])[\/](0[1-9]|1[0-2])[\/](\d{4})/";
    $patronDni="/\d{8}[TRWAGMYFPDXBNJZSQVHLCKE]/";
    $patronCorreo="/^.+\@.+[.com]/";
    $patronUrl="/(http:\/|https:\/)(\/.+)+/i";

    $errores=array();
    if($_POST['nombre']=="")
    {
        $errores['nombre']="ERROR:ESTÁ VACÍO";
    }
    if($_POST['apellidos']=="")
    {
        $errores['apellidos']="ERROR:ESTÁ VACÍO";
    }

    if($_POST['fnac']=="")
    {
        $errores['fnac']="ERROR:ESTÁ VACÍO";
    }
    else
    {
        if(!preg_match($patronFecha,$_POST['fnac']))
        {
            $errores['fnac']="ERROR:NO ES UNA FECHA CORRECTA";
        }
    }
    if($_POST['dni']=="")
    {
        $errores['dni']="ERROR:ESTÁ VACÍO";
    }
    else
    {
        if(!preg_match($patronDni,$_POST['dni']))
        {
            $errores['dni']="ERROR:NO ES UN DNI CORRECTO";
        }
    }

    if($_POST['correo']=="")
    {
        $errores['correo']="ERROR:ESTÁ VACÍO";
    }
    else
    {
        if(!preg_match($patronCorreo,$_POST['correo']))
        {
            $errores['correo']="ERROR:NO ES UN CORREO ELECTRÓNICO CORRECTO";
        }
    }

    if($_POST['url']=="")
    {
        $errores['url']="ERROR:ESTÁ VACÍO";
    }
    else
    {
        if(!preg_match($patronUrl,$_POST['url']))
        {
            $errores['url']="ERROR:NO ES UNA URL CORRECTA";
        }
    }
        
    

    return $errores;
}
function pinta_error($errores, $clave)
{
    echo "<spam style='color:red'>".$errores["$clave"]."</spam>";
}