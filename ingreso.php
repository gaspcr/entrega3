<?php
session_start();
$usuario = $_SESSION['nombre'];
$contrasena = $_SESSION['password'];

echo "<h1>BIENVENIDO $usuario, tu contraseña es $contrasena</h1>";