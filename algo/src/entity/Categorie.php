<?php 
require_once dirname(__DIR__)."/entity/Produit.php";
class Categorie{
     private int $id ;
     private string $libelle ;
     private static $nbreCate=0;

     //OneToMany
     private array $produits=[];
     private int $nbreProduit=0;

     public function getProduits(array &$allProduit):void
     {
        $allProduit=[];
       for ($i=1; $i <= $this->nbreProduit; $i++) { 
            $allProduit[$i]=$this->produits[$i];
       }
     }

     public function addProduit(Produit $produit):bool{
        if ( $this->nbreProduit<100) {
             $this->nbreProduit++;
             $this->produits[$this->nbreProduit]=$produit;
            return true;
        }
         return false;
     }

 


     //Constructeur
     public function __construct()
     {
         $this->id=++Categorie::$nbreCate;
     }
    //Getters et Setters de id 
    public function getId():int
    {
        return $this->id;
    }

    public function setId(int $id):void{
        if ( $id<0) {
            throw new \Exception("Id doit etre positif", 1);
        }
         $this->id=$id;
    }
    //Getter et Setters de libelle 
     public function getLibelle():string
    {
        return $this->libelle;
    }

    public function setLibelle(string $libelle):void{
        if (empty(trim($libelle))) {
            throw new \Exception("Libelle est Obligatoire", 1);
        }
         $this->libelle=$libelle;
    }

    public function toString():string
    {
        return "ID: ".$this->id ."  Libelle : ". $this->libelle."\n";
    }

}