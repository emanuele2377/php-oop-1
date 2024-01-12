<?php
class movis
{
    public $genere;
    public $durata;
    public $lingua;

    //Costruttore, viene richiamato dove scriviamo new Address(...)
    public function __construct($genere, $durata, $lingua)
    {
        //Prendo gli argomenti passati e li assegno a QUESTA istanza che sto creando
        $this->genere = $genere;
        $this->durata = $durata;
        $this->lingua = $lingua;
    }

    public function getFullAddress()
    {
        $result = $this->genere . ", " . $this->durata . " - " . $this->lingua . "  ";
        return $result;
    }
}
