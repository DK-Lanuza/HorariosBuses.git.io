<?php
function conn(){
    $hostname = "localhost";
    $usuariodb = "root";
    $password = "";
    $dbname = "registro";

    $conrctar = mysql_connect($hostname, $usuariodb, $password, $dbname);
    return $conectar;
}
?>