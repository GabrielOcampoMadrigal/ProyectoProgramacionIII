<?php

include_once "Conexion.php";

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/Login/Estilo/LoginStyle.css">
    <link rel="stylesheet" href="/Navegators/Normalize.css">
    <title>Login</title>
</head>

<body>

    <div class="Container">
        <h2 class="MiniTitulo">QuickerFGC||Services</h2>

        <div class="Login">
            <h2 class="Title" style="text-transform: uppercase;">Sign In</h2>
            <input type="text" name="" class="TextoUsuario" placeholder="Nombre de Usuario" id="Usuario.">
            <input type="text" name="" class="ContraseñaUsuario" placeholder="Contraseña" id="Contraseña.">
            <button><a href="index.php">Sign up</a></button>
        </div>

        <script src="/Login/Funciones/Login.js"></script>
</body>

</html>