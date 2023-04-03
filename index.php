<?php
require_once "./models/Product.php";
require_once "./models/Category.php";
require_once "./models/Food.php";

$products = [
    $product1 = new Product('croccantini',15.90,'croccantini di pollo', 'dog',''),
    $product2 = new Product('crocchette',16.90,'crocchette di manzo','cat',''),
    $product3 = new Product('palla',5.50, 'palla di gomma antistress','dog',''),
  ];

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP OOP-2</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet"     integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Products</h1>
    <div>
        <?php foreach ($products as $product) : ?>

            <div class="card">
                <div class="card-body d-flex flex-column">
                    <h5 class="card-title">Name: <?php echo $product->getName(); ?></h5>
                    <p class="card-text">Price: <?php echo $product->getPrice(); ?> €</p>
                    <p class="card-text">Description: <?php echo $product->getDescription(); ?></p>
                    <!-- <p class="card-img">Type: <?php echo $product->setFigure($newFigure); ?></p> -->
                </div>
            </div>
        <?php endforeach ?>
    </div>
</div>


    

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/js/bootstrap.bundle.min.js"integrity="sha384-qKXV1j0HvMUeCBQ+QVp7JcfGl760yU08IQ+GpUo5hlbpg51QRiuqHAJz8+BrxE/N"crossorigin="anonymous"></script>
</body>
</html>