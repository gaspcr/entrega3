<?php include("template/cabecera.php"); ?>
            <table class="table table-hover">
                <tr class="table-dark">
                    <td>artista</td>
                </tr>
                <?php require("conexion.php") ;
                $var = $_POST["tipo"];
                $query = "SELECT nombre FROM users WHERE nombre = '$var';";
                $result = $db -> prepare($query);
                $result -> execute();
                $data = $result -> fetchAll();
                ?>
                <?php
                foreach ($data as $d) {
                    echo "<tr>
                            <td>$d[0]</td>
                        </tr>";
                }
                ?>
            </table>

<?php include("template/pie.php"); ?>