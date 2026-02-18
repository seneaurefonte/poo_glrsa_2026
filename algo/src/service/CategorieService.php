<?php
require_once dirname(__DIR__)."/entity/Categorie.php";
class CategorieService{

    private static  array $categories;
    private static int $nbreCat;
    private  function __construct()
    {
        $this->nbreCat=0;
    }

    public static function addCategorie(Categorie $categorie){
       if ( CategorieService::$nbreCat<TAILLE) {
            CategorieService::$nbreCat++;//
            CategorieService::$categories[CategorieService::$nbreCat]=$categorie;
       }
    }
     public static function getAllCategories(array &$allCategories){
      for ($i=1; $i <= CategorieService::$nbreCat; $i++) { 
         $allCategories[$i]=CategorieService::$categories[$i];
      }
      
    }

    public static function getNbreCat():int 
    {
        return   CategorieService::$nbreCat;
    }
}