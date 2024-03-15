<?php
//variables para que almacenaran lo que ingrese el usuario gracias al metodo "POST"
$usuario=$_POST['usuario']; 
$correo_electronico=$_POST['id'];
$contraseña=$_POST['contra'];

session_start();// Funcion con la cual se inicia sesion
$_SESSION['usuario']=$usuario; //Se guarda el usuario

$conexion = mysqli_connect("localhost", "root", "", "Modelo_Relacional_Proyecto"); //Se hace la conexion la DB de MYSQL

$consulta="SELECT * FROM usuario WHERE nombre='$usuario' AND contraseña='$contraseña' AND correo_electronico='$correo_electronico'";
//Se busca en la base de datos la tabla en este caso de "Usuarios" los cuales seran validados
$resultado= mysqli_query($conexion, $consulta); //buscar resultados de consulta

$filas= mysqli_num_rows($resultado); // verificar si se encontraron los resultados de la constulta

if($filas){ //Se inicia una condicion 
    header("location: Pagina/Inicio.php");//si validacion es correcta sera enviado a la pagina de inicio
}else{//En el caso de que la validacion sea incorrecta
    ?>
    <?php
    include("login.php"); // Se quedara en la misma pagina del formulario
    ?>
    <h1>ERROR DE AUTORIZACION</h1><!--Y Se mostrara en pantalla un mensaje de error-->
    <?php
}

mysqli_free_result($resultado); // Se exporta la variable resultado
mysqli_close($conexion); // Se exporta la variable conexion
?>