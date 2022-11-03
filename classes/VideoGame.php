<?php 
class VideoGame extends Product{

    public string $fsp;
    public int $ageMinumum=16;
    public string $moyenneDeCritique;


    public function __construct(
        float $price_tax_excluded, string $name, string $category, int $stock, $description,string $auteur,string $format,string $fps,int $ageMinimum,string $moyenneDeCritique)
        {
            parent::__construct($price_tax_excluded,5.5,$name,$category,$stock,$description);
            $this->auteur=$auteur;
            $this->format=$format;
            
        }




    public function ageRequis($ageMinumum){
        if($ageMinumum<16){
            echo "null";
        }
    }

    
}






?>