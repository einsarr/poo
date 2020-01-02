<?php
require_once "Produit.php";
class Cadeau extends Produit{
    private $evenement;
    

    public function __construct($evenement)
    {
        $this->evenement = $evenement;
    }

    public function getEvenement()
    {
        return $this->evenement;
    }
    
    public function setEvenement($evenement)
    {
        $this->evenement = $evenement;
    }
   
    public function toString()
    {
        return parent::toString()." evenement : ".$this->evenement;
    }

}