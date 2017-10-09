<?php

require 'Personnage.php';
require 'Archer.php';

$merlin = new Personnage("Merlin");
$harry = new Personnage("Harry");
$legolas = new Archer("Legolas");


var_dump($merlin, $harry, $legolas);

/* if($harry->mort()){
    echo "Harry est mort.";
}else{
    echo "Harry a survecu avec " . $harry->vie;
} */
