<?php


 abstract class Product implements IProduct
{
    protected float $price_tax_excluded; // prix HT
    public float $vat; // TVA
    protected float $price_tax_included;
    public  string $name;
    public string $category;
    public int $stock;
    public  string $description;

    public function __construct(float $price_tax_excluded, 
                            float $vat, string $name, string $category, int $stock, $description)
    {
        $this->category = $category;
        $this->description = $description;
        $this->name = $name;
        $this->price_tax_excluded = $price_tax_excluded;
        $this->vat = $vat;
        $this->stock = $stock;
       
        $this->price_tax_included = ($this->price_tax_excluded * $this->vat/100) + $this->price_tax_excluded;
    }

    public function getStockValue() {
        return $this->price_tax_excluded * $this->stock;
    }

    public function setPriceTaxExcluded(float $price_tax_excluded) {
        if ($price_tax_excluded > 0) {
            $this->price_tax_excluded = $price_tax_excluded;
        }
    }

    public function getPriceTaxExcluded() {
        return $this->price_tax_excluded.'€';
    }

    public function getPriceTaxIncluded() {
        return $this->price_tax_included.'€';
    }

    public function showAll() {
        ?>
        <h2>Produit ajouté :</h2>
        <p>Nom : <?=$this->name ?></p>
        <p>Description : <?=$this->description ?></p>
        <p>Catégories : <?=$this->category ?></p>
        <p>Prix HT : <?=$this->getPriceTaxExcluded(); ?></p>
        <p>Prix TTC : <?=$this->getPriceTaxIncluded(); ?></p>
        <p>TVA : <?=$this->vat ?></p>
        <p>Stock : <?=$this->stock ?></p>
        <p>Valorisation du stock : <?=$this->getStockValue() ?></p>
        <?php
    }

    public static function ducplicate($product1,$name){
        $produitNew=new Product($product1->price_tax_excluded,$product1->vat,$name,$product1->category,$product1->stock,"");
        return $produitNew;

    }




}






?>