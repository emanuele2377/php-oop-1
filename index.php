<?php
class Movie
{
    public $durata;
    public $genere;
    public $attori;

    function __construct($_durata, $genere, $attori)
    {
        $this->durata = $durata;
        $this->genere = $genere;
        $this->attori = $attori;
    }
}

$oppenheimer = new Movie();
$disturbia = new Movie();
$casino = new Movie();
$alien = new Movie();
