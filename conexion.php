<?php
//FUNC PARA LLAMAR A LA CONEXION A LA BASE DE DATO
function conectar(){
    $user="root";
    $pass="";
    $server="localhost";
    $db="vladb";
    $con=mysql_connect($server,$user,$pass) or die ("Error al conectar a la base de datos".mysql_error());
    mysql_select_db($db,$con);

    return $con;
}
?>