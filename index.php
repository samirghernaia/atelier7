<?php
    require __DIR__."/Product.php";

    if (isset($_POST["submitProduct"])) {
        $product1 = new Product($_POST["price_tax_excluded"],$_POST["vat"],$_POST["name"],$_POST["category"],$_POST["stock"],$_POST["description"]);
        $product2=Product::ducplicate($product1,"vest");
        
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Produit</h1>

    <form action="index.php" method="post">
        <p>
            <label for="price_tax_excluded">Prix HT :</label>
            <input type="text" id="price_tax_excluded" name="price_tax_excluded">
        </p>
        <p>
            <label for="vat">TVA :</label>
            <input type="text" id="vat" name="vat">
        </p>
        <p>
            <label for="name">Nom :</label>
            <input type="text" id="name" name="name">
        </p>
        <p>
            <label for="description">Description :</label>
            <input type="text" id="description" name="description">
        </p>
        <p>
            <label for="stock">Stock :</label>
            <input type="text" id="stock" name="stock">
        </p>
        <p>
            <label for="category">Catégories :</label>
            <select name="category" id="category">
                <option value="vetements">Vêtements</option>
                <option value="dvd">DVD</option>
                <option value="livres">Livres</option>
            </select>
        </p>
        <p>
            <input type="submit" value="Envoyer" name="submitProduct">
        </p>
        
    </form>

    <?php
    if (isset($_POST["submitProduct"])) {
        $product1->showAll();
        $product2->showAll();
    }
    ?>
    
</body>
</html>