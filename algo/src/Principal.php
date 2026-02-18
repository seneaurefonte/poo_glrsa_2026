<?php 
define("TAILLE",100);
/*
  Convention Ecriture 
  1-Fichier porte le meme nom que sa Classe
  2-Une classe est ecrite en PascalCase
  3-Les methodes et attributs sont en camelCase

*/
require_once __DIR__."/entity/Categorie.php";
require_once __DIR__."/view/CategorieView.php";
require_once __DIR__."/service/CategorieService.php";
class Principal{
   


    public function __construct()
    {
    
    }

    public function execute():void 
    {
        $categorie=CategorieView::saisieCategorie();
        CategorieService::addCategorie($categorie);
        $allCategories=[];
        CategorieService::getAllCategories($allCategories);
        CategorieView::afficherCategories($allCategories,  CategorieService::getNbreCat());

    }
  
}

