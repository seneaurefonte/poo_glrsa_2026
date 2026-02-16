<?php
require_once dirname(__DIR__)."/entity/Categorie.php";

/*
  $this : Objet Ecours
  self : La Classe courante

*/
class CategorieService{

    private static  array $categories;
    private  function __construct()
    {

    }
    public static  function addCategorie(Categorie $categorie){
          self::$categories[]=$categorie; 
    }

     public  static function getAllCategories():array{
        return   self::$categories;
    }

   
}