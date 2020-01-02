<?php

class StockImpl implements IStock
{
    public function __construct()
    {
        
    }
    public function cree()
    {
        $produit = new Ordinateur(2,"Ordinateur portable","HP");
        $tock = new Stock(1,23,"02/01/2020",$produit);
        return $tock;
    }
    public function affiche()
    {
        var_dump($this->cree());
    }
}