<?php
    session_start();
?>
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
    <body>
        <ul>
            <li><a href="test1.php">Link1</a></li>
            <li><a href="test2.php">Link2</a></li>
        </ul>


    <?php

    $_SESSION['user'] = "joao1234";

    ?>
    </body>
</html>