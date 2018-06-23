<?php
    include("index2.php");
    include("index1.php");
?>
<html>
    <head>
    <link rel="stylesheet" href="style.css">
    </head>
    <body class="body">
        <div class="page">
            <div class="header">
               <center> <a class="logo" href="#">My register</a></center>
            </div>
            <div class="content">
                <div class="bar">
                    <h2 class="styleh2">Registratia</h2>
                    <form class="form" method="post" action="">
                        <input class="inputa" type="text" name="username" placeholder="username"><br>
                        <input class="inputa" type="email" name="email" placeholder="..@mail.ru"><br>
                        <input class="inputa" type="password" name="password" placeholder="password"><br>
                        <input class="inputa" type="password" name="repassword" placeholder="repid password"><br>
                        <select name="country" class="selectclass">
                            <option> Select Country </option>;
                            <?php

                            for($i=0; $i< count($countries);$i++){

                                echo "<option>".$countries[$i]."</option>";
                            }
                            ?>
                        </select><br><br>                     
                        <button class="buttonclass">Click me</button>
                    </form>
                </div>
                <div class="maincontent">
                    <div class="a">
                    <?php 
                    echo "<ul>";
                    $response = validation ($_POST);
                        foreach ($response as $key => $value){
                            if(!$value["isValid"]) {
                                echo "<li>";
                                echo $key . " " . $value["message"];
                                echo "</li>";
                            }
                        }
                        // echo "<li>";
                        echo review($_POST["password"], $_POST["repassword"]);
                        // echo "</li>";
                       echo "</ul>";
                    ?>
                    </div>
                    <div class="a">
                    </div>
                </div>
                <div class="clear"></div>
            </div>
            <div class="footer">
                <p class="pfooter"> is optimized for learning</p>
            </div>
        </div>
    </body>
</html>