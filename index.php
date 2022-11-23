<?php include("template/cabecera.php"); ?>
            <h3 align="center">Pregunta 1: nombre y número contacto de todas las productoras de eventos</h3>
            <h3 align="center">Pregunta 2: cuantos eventos ha producido cada productora</h3>
            <h3 align="center">Pregunta 3: Ultimo evento producido por la productora</h3>
             <?php
            #Primero obtenemos todos los tipos de pokemones
            require("conexion.php");
            $result = $db -> prepare("SELECT DISTINCT nombre FROM productora;");
            $result -> execute();
            $dataCollected = $result -> fetchAll();
            ?>

            <form align="center" action="pregunta3.php" method="post">
                Seleccinar una productora:
                <select name="tipo">
                <?php
                #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
                foreach ($dataCollected as $d) {
                    echo "<option value='$d[0]'>$d[0]</option>";
                }
                ?>
                </select>
                <br><br>
                <input type="submit" value="Buscar por tipo">
            </form>
            <br>
            <br>
            <br>
            <br>

            <h3 align="center">Ingreso total de venta de entradas por el evento:</h3>
            <h3 align="center">Pregunta 4: Artistas que han trabajado con la productora</h3>
             <?php
            #Primero obtenemos todos los tipos de pokemones
            require("conexion.php");
            $result = $db -> prepare("SELECT DISTINCT nombre FROM productora;");
            $result -> execute();
            $dataCollected = $result -> fetchAll();
            ?>

            <form align="center" action="pregunta4.php" method="post">
                Seleccinar una productora:
                <select name="tipo">
                <?php
                #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
                foreach ($dataCollected as $d) {
                    echo "<option value='$d[0]'>$d[0]</option>";
                }
                ?>
                </select>
                <br><br>
                <input type="submit" value="Buscar por tipo">
            </form>
            <br>
            <br>
            <br>
            <br>

            <h3 align="center">Pregunta 5: Ingreso total de venta de entradas por el evento</h3>
             <?php
            #Primero obtenemos todos los tipos de pokemones
            require("conexion.php");
            $result = $db -> prepare("SELECT DISTINCT nombre FROM evento;");
            $result -> execute();
            $dataCollected = $result -> fetchAll();
            ?>

            <form align="center" action="pregunta5.php" method="post">
                Seleccinar una evento:
                <select name="tipo">
                <?php
                #Para cada tipo agregamos el tag <option value=value_of_param> visible_value </option>
                foreach ($dataCollected as $d) {
                    echo "<option value='$d[0]'>$d[0]</option>";
                }
                ?>
                </select>
                <br><br>
                <input type="submit" value="Buscar por tipo">
            </form>
            <br>
            <br>
            <br>
            <br>
            <h3 align="center">Ingreso total de venta de entradas por el evento:</h3>
            <h3 align="center">Pregunta 6: número de artistas que se presentan en cada evento</h3>
            <h3 align="center">Pregunta 7: evento con mayor cantidad de entradas vendidas</h3>

<?php include("template/pie.php"); ?>