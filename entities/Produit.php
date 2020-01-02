<?php
abstract class  Produit{
    private $id;
    private $nom;
    

    public function __construct($id,$nom)
    {
        $this->id = $id;
        $this->nom = $nom;
    }

    public function getId()
    {
        return $this->id;
    }
    public function getNom()
    {
        return $this->nom;
    }
    

    public function setId($id)
    {
        $this->id = $id;
    }
    public function setNom($nom)
    {
        $this->nom = $nom;
    }
    public function setDate($date)
    {
        $this->date = $date;
    }
   
    public function toString()
    {
        return "Id : ".$this->id." Nom : ".$this->nom;
    }

}