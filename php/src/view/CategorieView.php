<?php 
require_once dirname(__DIR__)."/entity/Categorie.php";
class CategorieView{

    private function __construct()
    {
    }
    public static function saisieCategorie():Categorie
    {
             //$categorie=new Categorie();
              // $id=(int)readline("Entrer un id: ");
            // $categorie->setId($id);
              $libelle=readline("Entrer un Libelle: ");
             //$categorie->setLibelle($libelle);
             return new Categorie(null,$libelle);
    }

    public static  function afficherCategories(array $categories):void{
        foreach ($categories as $categorie) {
                echo($categorie);
        }
    }
      
    

}