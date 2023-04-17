<?php

//require_once __DIR__ . '/Cibo.php';

class Product
{
    public $nome;
    public $prezzo;
    public $img;
    public $categoria;

    function __construct($_nome, $_prezzo, array $_categoria, $_img='N/A')
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->img = $_img;
        $this->categoria = $_categoria;
    }
}

//$ciboCane = new Product('Royal Canin', 43.99);
//var_dump($ciboCane);