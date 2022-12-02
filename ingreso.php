<?php
session_start();
$usuario = $_SESSION['user'];
$contrasena = $_SESSION['password'];

echo "<h1>BIENVENIDO $usuario</h1>";