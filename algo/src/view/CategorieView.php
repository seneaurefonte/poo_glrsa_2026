<?php 
require_once dirname(__DIR__)."/entity/Categorie.php";
class CategorieView{

    private  function __construct()
  {
    
  }
    public  static function saisieCategorie():Categorie
    {
             //$categorie=new Categorie();
             $id=(int)readline("Entrer un id: ");
            // $categorie->setId($id);
              $libelle=readline("Entrer un Libelle: ");
            // $categorie->setLibelle($libelle);
            $categorie=new Categorie($id, $libelle);
             return $categorie;
    }

    public static function afficherCategories(array $categories,int $N):void{
        for ($i=1; $i <=$N ; $i++) { 
           echo ($categories[$i]->toString());
      }
    }

}