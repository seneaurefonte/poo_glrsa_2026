<?php 
class Categorie{
     private int|null $id ;
     private string|null $libelle ;
     private static $nbreCategorie=0;

     //Constructeur
     public function __construct(int|null $id=null,string|null $libelle=null)
     {
         $this->id=$id==null?++self::$nbreCategorie:$id;
         $this->libelle=$libelle;
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

    public function __toString():string
    {
        return "ID: ".$this->id ."  Libelle : ". $this->libelle."\n";
    }

}