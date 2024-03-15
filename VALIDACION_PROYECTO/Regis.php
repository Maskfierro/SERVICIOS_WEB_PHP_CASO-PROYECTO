<!DOCTYPE html>
<html style="background-color: burlywood" lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIGIN</title>
</head>
<body>
<link rel="stylesheet" href="/VALIDACION_PROYECTO/STYLES/ingreso.css">

    <form action="registrar.php" method="POST"> <!--Utilizo la etiqueta de formulario vinculando "validar.php" para validar la informacion -->
<center><img class="logo" src="/VALIDACION_PROYECTO/Imagenes/elxit.png" width="260" height="260"/></center><!--INCERTO LA IMAGEN-->
    <center><i><h1 style="font-size: 50px;">Formulario del Proyecto</h1></i></center><!--TITULO-->
    <center><i><h1 style="font-size: 30px;">Registro</h1></i></center>
            <br>
            <center><label for="usuario">Usuario</label> <input type="text" name="usuario"></center>
            <br><!--Ingresar el usuario-->
            <center><label for="id">Correo Electrónico</label> <input type="email" id="id" name="id"></center>
            <br><!--Ingresar el correo-->
            <center><label for="contra">Contraseña</label> <input type="password" id="contra" name="contra" placeholder="Mínimo 8 caracteres"></center>
            <br><!--Ingresar la contraseña-->
            <center><input type = "submit" value = "Ingresar Datos"></center>
            <br><!--Aqui esta el boton el cual envia la informacion y da ingreso a la siguiente pagina-->
</form>
</body>
</html>