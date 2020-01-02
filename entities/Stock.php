<?php
class Stock{
    private $id;
    private $niveau;
    private $date;
    private $produit;

    public function __construct($id,$niveau,$date,$produit)
    {
        $this->id = $id;
        $this->niveau = $niveau;
        $this->date = $date;
        $this->produit = $produit;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNiveau()
    {
        return $this->niveau;
    }
    public function getDate()
    {
        return $this->date;
    }
    public function getProduit()
    {
        return $this->produit;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNiveau($niveau)
    {
        $this->niveau = $niveau;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
    public function setProduit($produit)
    {
        $this->iproduitd = $produit;
    }
    public function toString()
    {
        return "Id : ".$this->id." Niveau : ".$this->niveau." Date : " .$this->date." Produit :".$this->produit;
    }

}