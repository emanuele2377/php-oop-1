<?php

require __DIR__ . '/movis.php';


$movs_oppenheimer = new Movie();


$movs_oppenheimer->genere = "dramma";
$movs_oppenheimer->durata = "3 ore";
$movs_oppenheimer->lingua = "inglese";

$movs_oppenheimer = new Movie("dramma", "3 ore", "inglese");


$movs_disturbia = new Movie("dramma", "3 ore", "inglese");


echo "<h2>Stampo titolo film</h2>";
var_dump($movs_oppenheimer);
var_dump($movs_disturbia);
