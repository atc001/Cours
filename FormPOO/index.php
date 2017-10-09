<?php

use \Tutoriel\HTML\bootstrapForm;
use \Tutoriel\Autoloader;

?>

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <meta name="description" content=""> 
        <meta name="author" content="">
        <link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
    </head>
    <body>
        <?php

        require 'class/Autoloader.php';

        \Tutoriel\Autoloader::register();

        $form = new bootstrapForm($_POST);
        ?>

        <form action="#" method="post">
            <?php
            echo $form->input('username');
            echo $form->input('password');
            echo $form->submit();
            ?>
        </form>
        
    </body>
</html>


