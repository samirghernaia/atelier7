<?php 
class  Books extends Product{
public string $auteur;
public string $format;



public function __construct(
    float $price_tax_excluded, string $name, string $category, int $stock, $description,string $auteur,string $format)
    {
        parent::__construct($price_tax_excluded,5.5,$name,$category,$stock,$description);
        $this->auteur=$auteur;
        $this->format=$format;
        
    }

public function afficherBook() {
    ?>
    <h2>infos livres :</h2>
    <p>titre : <?=$this->name ?></p>
    <p>auteur : <?=$this->auteur ?></p>
    <p>format : <?=$this->format ?></p>
    
    <?php
}
public function showAll() {
    ?>
    <h2>livre ajouté :</h2>
    <p>titre : <?=$this->name ?></p>
    <p>Description : <?=$this->description ?></p>
    <p>Catégories : <?=$this->category ?></p>
    <p>Prix HT : <?=$this->getPriceTaxExcluded(); ?></p>
    <p>Prix TTC : <?=$this->getPriceTaxIncluded(); ?></p>
    <p>TVA : <?=$this->vat ?></p>
    <p>Stock : <?=$this->stock ?></p>
    <p>Valorisation du stock : <?=$this->getStockValue() ?></p>
    <p>auteur : <?=$this->auteur ?></p>
    <p>format : <?=$this->format ?></p>
    <?php
}

}

?>