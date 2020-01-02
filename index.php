<?php
require_once "metier/IStock.php";
require_once "entities/Produit.php";
require_once "entities/Ordinateur.php";
require_once "entities/Stock.php";
require_once "metier/StockImpl.php";

$StockImpl = new StockImpl();

$StockImpl->cree();

$StockImpl->affiche();

