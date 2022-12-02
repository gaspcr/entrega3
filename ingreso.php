<?php
session_start();
$usuario = $_SESSION['user'];

echo "<h1>BIENVENIDO $usuario</h1>";