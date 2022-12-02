<?php include("template/cabecera.php"); ?>
#############################################################################################################################################
            <table class="table table-hover">
                <tr class="table-dark">
                    <td>productora</td>
                    <td>pass</td>
                </tr>
                <?php require("conexion.php") ;
                $varr = $_POST["tipo"];
                $var = str_replace(" ", "_", $varr);
                $query = "SELECT * FROM users WHERE nombre = '$var';";
                $result = $db -> prepare($query);
                $result -> execute();
                $data = $result -> fetchAll();
                ?>
                <?php
                foreach ($data as $d) {
                    echo "<tr>
                            <td>$d[1]</td>
                            <td>$d[2]</td>
                        </tr>";
                }
                ?>
            </table>
            <br>
            <br>
            <br>
            <br>
            <body>
        
            <form action="login.php" method="post">
        
                <h2>LOGIN</h2>
        
                <?php if (isset($_GET['error'])) { ?>
                
                    <p class="error"><?php echo $_GET['error']; ?></p>
                
                <?php } ?>
                
                <label>User Name</label>
                
                <input type="text" name="uname" placeholder="User Name"><br>
                
                <label>Password</label>
                
                <input type="password" name="password" placeholder="Password"><br> 
                
                <button type="submit">Login</button>
                
            </form>
                
            </body>
##############################################################################################################################
<h3 align="center">ingresar sesion con productora</h3>
             <?php
            #Primero obtenemos todos los tipos de pokemones
            require("config/conexion.php");
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
            require("config/conexion.php");
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

            <?php
            require("config/conexion.php");
            $result = $db -> prepare("SELECT * FROM users;");
            $result -> execute();
            $dataCollected = $result -> fetchAll();
            if (sizeof($dataCollected) == 0) {
                echo "<form align='center' action='queries/importar_usuarios.php' method='post'>
                <input type='submit' value='IMPORTAR usuarios'>
                </form>";
            }
            else {
                echo "<form align='center' action='queries/borrar_usuarios.php' method='post'>
                <input type='submit' value='BORRAR usuarios'>
                </form>";
            }
            ?>


<?php include("template/pie.php"); ?>