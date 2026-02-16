<?php 

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

    private function __construct()
    {
    
    }

    public static function execute():void 
    {

    do {
          echo "1-Ajouter Categorie\n";
          echo "2-Lister Categorie\n";
          echo "3-Ajouter Produit\n";
          echo "4-Lister Produit\n";
          echo "5-Quitter\n";
          $choix=readline("Veuillez faire un choix ");

          switch ($choix) {
            case '1':
                // Methode static Class::nomMethodeStatic()
                // Methode instance nomObjet->nomMethodeInstance()
                $categorie= CategorieView::saisieCategorie();
                CategorieService::addCategorie($categorie);
                break;
            case '2':
                  $allCategories= CategorieService::getAllCategories();
                  CategorieView::afficherCategories($allCategories);
            default:
                # code...
                break;
          }

    } while ($choix!=5);

    }
  
}

