<?php include("template/cabecera.php"); ?>
            <h3 align="center">ingresar sesion con productora</h3>
             <?php
            #Primero obtenemos todos los tipos de pokemones
            require("conexion.php");
            $result = $db -> prepare("SELECT DISTINCT nombre FROM productora;");
            $result -> execute();
            $dataCollected = $result -> fetchAll();
            ?>

            <form align="center" action="in_productoras.php" method="post">
                Seleccinar una productora para ingresar:
                <select name="tipo">
                <?php
                #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
                foreach ($dataCollected as $d) {
                    echo "<option value='$d[0]'>$d[0]</option>";
                }
                ?>
                </select>
                <br><br>
                <input type="submit" value="Ingresar sesion">
            </form>
            <br>
            <br>
            <br>
            <br>
            <h3 align="center">ingresar sesion con artista</h3>
             <?php
            #Primero obtenemos todos los tipos de pokemones
            require("conexion.php");
            $result = $db -> prepare("SELECT DISTINCT nombre FROM artistas;");
            $result -> execute();
            $dataCollected = $result -> fetchAll();
            ?>

            <form align="center" action="in_artistas.php" method="post">
                Seleccinar un artista para ingresar:
                <select name="tipo">
                <?php
                #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
                foreach ($dataCollected as $d) {
                    echo "<option value='$d[0]'>$d[0]</option>";
                }
                ?>
                </select>
                <br><br>
                <input type="submit" value="ingresar sesion">
            </form>
            <br>
            <br>
            
            <br>
            <br>

<?php include("template/pie.php"); ?>