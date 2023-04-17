<?php 

require_once __DIR__ . '/Product.php';

class Accessorio extends Product
{
    public $materiali;
    public $dimensioni;

    function __construct($_materiali, $_dimensioni, $_nome, $_prezzo, array $_categoria, $_img='N/A')
    {
        parent:: __construct($_nome, $_prezzo, $_categoria, $_img='N/A');
        
        $this->materiali = $_materiali;
        $this->dimensioni = $_dimensioni;
    }
}

