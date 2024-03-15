<?php

$usuario=$_POST['usuario']; 
$correo_electronico=$_POST['id'];
$contraseña=$_POST['contra'];

session_start();
$_SESSION['usuario']=$usuario;

$conexion = mysqli_connect("localhost", "root", "", "modelo_relacional_proyecto");

$crearDatos="INSERT INTO usuario (nombre, correo_electronico, contraseña) VALUES ('$usuario', '$correo_electronico', '$contraseña')";
$verdadero = mysqli_query($conexion,$crearDatos);

if($verdadero){
    header("location:componentes/seleccion.php");
    ?>
    <h1>Datos Creados Stisfactoriamente</h1>
    <?php
}else{
    ?>
    <?php
    include("/Regis.php");
    ?>
    <h1>Error al registrarse</h1>
    <?php
}

mysqli_close($conexion);

?>