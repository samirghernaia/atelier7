<?php 

interface IProduct{
    public function getStockValue();

    public function setPriceTaxExcluded(float $price_tax_excluded);
    public function getPriceTaxExcluded();
    public function getPriceTaxIncluded();
    public function showAll();
    public static function ducplicate($product1,$name);




}



?>