<?php include("template/cabecera.php"); ?>
            <body>
        
            <form action="sesion.php" method="post">
                <h2>LOGIN</h2>
                <?php if (isset($_GET['error'])) { ?>
                    <p class="error"><?php echo $_GET['error']; ?></p>
                <?php } ?>
                <label>User Name</label>
                <input type="text" name="user" placeholder="User Name"><br>
                <label>Password</label>
                <input type="password" name="password" placeholder="Password"><br> 
                <button type="submit">Login</button>
            </form>
                
            </body>

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
            <form align='center' action='readme.php' method='post'>
                <input type='submit' value='README'>

<?php include("template/pie.php"); ?>