<?php 

require_once __DIR__ . '/Product.php';

class Gioco extends Product
{
    public $caratteristiche;
    public $dimensioni;

    function __construct($_nome, $_prezzo, array $_categoria, $_caratteristiche, $_dimensioni, $_img='N/A')
    {
        parent:: __construct($_nome, $_prezzo, $_categoria, $_img='N/A');
        
        $this->caratteristiche = $_caratteristiche;
        $this->dimensioni = $_dimensioni;
    }

    
}

