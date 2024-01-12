<?php
class Movie
{
    public $durata;
    public $genere;
    public $attori;

    function __construct($durata, $genere, $attori)
    {
        $this->durata = $durata;
        $this->genere = $genere;
        $this->attori = $attori;
    }
}

$oppenheimer = new Movie($durata, $genere, $attori);
$disturbia = new Movie($durata, $genere, $attori);
$casino = new Movie($durata, $genere, $attori);
$alien = new Movie($durata, $genere, $attori);
