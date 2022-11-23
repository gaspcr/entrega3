<?php include("template/cabecera.php"); ?>
            <table class="table table-hover">
                <tr class="table-dark">
                    <td>evento</td>
                    <td>acumulado</td>
                    <td>ventas</td>
                </tr>
                <?php require("conexion.php") ;
                $query = "SELECT * FROM acumulado WHERE ventas = (SELECT MAX(ventas) FROM acumulado)";
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
                        </tr>";
                }
                ?>
            </table>
<?php include("template/pie.php"); ?>