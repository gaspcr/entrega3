<?php
  try {
    $user = 'grupo82';
    $password = 'grupo82';
    $databaseName = 'grupo82e3';
    $db = new PDO("pgsql:dbname=$databaseName;host=localhost;port=5432;user=$user;password=$password");
    $user2 = 'grupo93';
    $password2 = 'astro123';
    $databaseName2 = 'grupo93e3';
    $db2 = new PDO("pgsql:dbname=$databaseName2;host=localhost;port=5432;user=$user2;password=$password2");
  } catch (Exception $e) {
    echo "No se pudo conectar a la base de datos: $e";
  }
?>