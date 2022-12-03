<?php
session_start();
$usuario = $_SESSION['user'];

echo "<h1>BIENVENIDO $usuario</h1>";

echo "<form align='center' action='queries/logout.php' method='post'>
    <input type='submit' value='LOGOUT'>
    </form>";