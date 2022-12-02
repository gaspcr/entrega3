<?php include("template/cabecera.php"); ?>
            <table class="table table-hover">
                <tr class="table-dark">
                    <td>artista</td>
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
<?php include("template/pie.php"); ?>