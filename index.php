<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <?php

        require_once(__DIR__ . "/models/product.php");
        require_once(__DIR__ . "/models/typology.php");
        require_once(__DIR__ . "/db/products.php");
    
    ?>
    <title>Animal shop</title>
</head>
<body>
    <h1>SHOP</h1>
    <div class="row">
        <?php foreach ($products as $product){ ?>
            <div class="card">
                <div class="img-container">
                    <img src="<?php echo $product->getImage() ?>" alt="Product Image">
                </div>
                <h2><?php echo $product->getName() ?></h2>
                <p><?php echo $product->getPrice() ?> &euro;</p>
                <div class="logo-container">
                    <img src="<?php echo $product->getCategory() ?>" alt="Category Image">
                </div>
                <p>Tipologia: <?php echo $product->getType() ?></p>
            </div>
        <?php }?>
    </div>

</body>
</html>