<?php

require_once __DIR__ . '/Product.php';

class Cibo extends Product 
{
    
    public $peso;
    public $ingredienti;

    function __construct(array $_ingredienti, $_nome, $_prezzo, array $_categoria, $_img='N/A', $_peso='N/A')
    {
        parent::__construct($_nome, $_prezzo, $_categoria, $_img='N/A');
        
        $this->ingredienti = $_ingredienti;
        $this->peso = $_peso;
    }
}

