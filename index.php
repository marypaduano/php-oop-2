<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/Food.php";

$dog = new Category ('dog');
$cat = new Category ('cat');

$products = [
    $product1 = new Product('croccantini',15.90,'croccantini di pollo', $dog),
    $product2 = new Product('crocchette',16.90,'crocchette di manzo',$dog),
    $product3 = new Product('palla',5.50, 'palla di gomma antistress', $dog),
    $product4 = new Product('osso',6.90,'osso per denti sani', $dog),
    $product5 = new Product('guinzaglio',9.90,'guinzaglio basic',$dog),
    $product6 = new Product('pettorina',15.50, 'pettorina per cani di taglia media', $dog),
  ];
$products_cat = [
    $product1 = new Product('croccantini',12.90,'croccantini al formaggio', $cat),
    $product2 = new Product('crocchette',13.90,'crocchette di tonno',$cat),
    $product3 = new Product('bastoncini pop',9.90, 'bastoncini di pesce', $cat),
    $product4 = new Product('tiragraffi',19.90,'tiragraffi a due piani', $cat),
    $product5 = new Product('collare',9.90,'collare con campanellino',$cat),
    $product6 = new Product('lettiera',18.50, 'lettiera per gatti autopulente', $cat),
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-2</title>
    <script src="https://kit.fontawesome.com/c5d4023dee.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"     integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

<div class="container py-3 text-center">
    <h1>Products for Dogs</h1>
    <div class="grid">
        <?php foreach ($products as $product) : ?>
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <p class="card-pic"><?php echo $product->category->figure; ?></p>
                    <h5 class="card-title">Product: <?php echo $product->getName(); ?></h5>
                    <p class="card-text">Price: <?php echo $product->getPrice(); ?> €</p>
                    <p class="card-text">Description: <?php echo $product->getDescription(); ?></p>                    
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>
<div class="container py-3 text-center">
    <h1>Products for Cats</h1>
    <div class="grid">
        <?php foreach ($products_cat as $product) : ?>
            <div class="card">
                <div class="card-body d-flex flex-column">
                    <p class="card-pic"><?php echo $product->category->figure; ?></p>
                    <h5 class="card-title">Product: <?php echo $product->getName(); ?></h5>
                    <p class="card-text">Price: <?php echo $product->getPrice(); ?> €</p>
                    <p class="card-text">Description: <?php echo $product->getDescription(); ?></p>                    
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"crossorigin="anonymous"></script>
</body>
</html>