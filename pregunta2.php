<?php include("template/cabecera.php"); ?>
            <table class="table table-hover">
                <tr class="table-dark">
                    <td>nombre</td>
                    <td>count</td>
                </tr>
                <?php require("conexion.php") ;
                $query = "SELECT nombre, COUNT(*) FROM productora GROUP BY nombre";
                $result = $db -> prepare($query);
                $result -> execute();
                $data = $result -> fetchAll();
                ?>
                <?php
                foreach ($data as $d) {
                    echo "<tr>
                            <td>$d[0]</td>
                            <td>$d[1]</td>
                        </tr>";
                }
                ?>
            </table>
<?php include("template/pie.php"); ?>