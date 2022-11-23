<?php include("template/cabecera.php"); ?>
            <table class="table table-hover">
                <tr class="table-dark">
                    <td>nombre</td>
                    <td>recinto</td>
                    <td>fecha_inicio</td>
                    <td>fecha_termino</td>
                    <td>artista</td>
                    <td>productora</td>
                </tr>
                <?php require("conexion.php") ;
                $var = $_POST["tipo"];
                $query = "SELECT * FROM fechas WHERE productora = '$var';";
                $result = $db -> prepare($query);
                $result -> execute();
                $data = $result -> fetchAll();
                ?>
                <?php
                foreach ($data as $d) {
                    echo "<tr>
                            <td>$d[0]</td>
                            <td>$d[1]</td>
                            <td>$d[2]</td>
                            <td>$d[3]</td>
                            <td>$d[4]</td>
                            <td>$d[5]</td>
                        </tr>";
                }
                ?>
            </table>
<?php include("template/pie.php"); ?>