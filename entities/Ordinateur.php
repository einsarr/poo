<?php
require_once "Produit.php";
class Ordinateur extends Produit{
    private $marque;
    

    public function __construct($id,$nom,$marque)
    {
        parent::__construct($id,$nom);
        $this->marque = $marque;
    }

    public function getMarque()
    {
        return $this->marque;
    }
    
    public function setMarque($marque)
    {
        $this->marque = $marque;
    }
   
    public function toString()
    {
        return parent::toString()." marque : ".$this->marque;
    }

}