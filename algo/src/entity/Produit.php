<?php 
require_once dirname(__DIR__)."/entity/Categorie.php";
class Produit{
     private int $id;
     private string $libelle;
     private float $prix;
     private float $qteStock;
     private static int $nbreProduit=0;
    
    //ManyToOne
    private Categorie $categorie;
     public function __construct(int|null $id=null,string|null $libelle=null,float|null $prix=null,float|null $qteStock=null)
    {
        $this->setId($id?? ++Produit::$nbreProduit);
        $this->setLibelle($libelle);
        $this->setPrix($prix);
        $this->setQteStock($qteStock);
    }


     /**
      * Get the value of qteStock
      */
     public function getQteStock(): float
     {
          return $this->qteStock;
     }

     /**
      * Set the value of qteStock
      */
     public function setQteStock(float $qteStock): void
     {
        if( $this->qteStock<=0){
             throw new \Exception("La quantite doit etre positive", 1);
             
        }
          $this->qteStock = $qteStock;
     }

     /**
      * Get the value of id
      */
     public function getId(): int
     {

          return $this->id;
     }

     /**
      * Set the value of id
      */
     public function setId(int $id): void
     {
        if( $this->id<=0){
             throw new \Exception("L'Id doit etre positive", 1); 
        }
          $this->id = $id;

    
     }

     /**
      * Get the value of prix
      */
     public function getPrix(): float
     {
          return $this->prix;
     }

     /**
      * Set the value of prix
      */
     public function setPrix(float $prix): void
     {
          if( $this->prix <=0){
             throw new \Exception("Le Produit doit etre positive", 1); 
          }
          $this->prix = $prix;
     }

     /**
      * Get the value of libelle
      */
     public function getLibelle(): string
     {
          return $this->libelle;
     }

     /**
      * Set the value of libelle
      */
     public function setLibelle(string $libelle): void
     {
           if( empty( trim($this->libelle)) ){
             throw new \Exception("Le Libelle est obligatoire", 1); 
          }
          $this->libelle = $libelle;

     }

     public function calculMontant():float
     {
        return $this->prix*$this->qteStock;
     }

    /**
     * Get the value of categorie
     */
    public function getCategorie(): Categorie
    {
        return $this->categorie;
    }

    /**
     * Set the value of categorie
     */
    public function setCategorie(Categorie $categorie): void
    {
        $this->categorie = $categorie;
    }
}