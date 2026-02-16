<?php
require_once dirname(__DIR__)."/entity/Categorie.php";
class CategorieService{

    private array $categories;
    private int $nbreCat;
    public function __construct()
    {
        $this->nbreCat=0;
    }

    public function addCategorie(Categorie $categorie){
       if ( $this->nbreCat<TAILLE) {
          $this->nbreCat++;//
          $this->categories[$this->nbreCat]=$categorie;
       }
    }


     public function getAllCategories(array &$allCategories){
      for ($i=1; $i <= $this->nbreCat ; $i++) { 
         $allCategories[$i]=$this->categories[$i];
      }
      
    }

    public function getNbreCat():int 
    {
        return   $this->nbreCat;
    }
}