<?php
require("config/conexion.php");
session_start();
$usuario = $_POST['user'];
$contrasena = $_POST['password'];

$result = $db -> prepare("SELECT * FROM users WHERE nombre = '$usuario' AND password = '$contrasena';");
$result -> execute();
$dataCollected = $result -> fetchAll();
if (sizeof($dataCollected) == 0) {
    header("Location: index.php?error=Usuario o contraseña incorrectos");
} else {
    $_SESSION['user'] = $usuario;
    header("Location: ingreso.php");
}
?>
