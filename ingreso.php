<?php
session_start();
$usuario = $_SESSION['user'];
if (isset($usuario)) {
    echo "<h1>Bienvenido $usuario</h1>";
    echo "<a href='logout.php'>Cerrar sesión</a>";
} else {
    header("Location: index.php");
}