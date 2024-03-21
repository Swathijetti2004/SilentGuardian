<?php
$HOSTNAME="localhost";
$USERNAME="root";
$PASSWORD="";
$DATABASE="silentguardian";

$connection=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);

if(!$connection){
    die(mysqi_error($connection));
}
?>