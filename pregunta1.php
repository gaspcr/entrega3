<?php include("template/cabecera.php"); ?>
            <table class="table table-hover">
                <tr class="table-dark">
                    <td>nombre</td>
                    <td>num_contacto</td>
                </tr>
                <?php require("conexion.php") ;
                $query = "SELECT nombre, numero_contacto FROM productora";
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