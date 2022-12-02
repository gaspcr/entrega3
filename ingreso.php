<?php
session_start();
$miusuario = $_SESSION['nombre'];
$micontrasena = $_SESSION['password'];

echo "<h1>BIENVENIDO $miusuario, tu contraseña es $micontrasena</h1>";