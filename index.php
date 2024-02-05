<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Animal shop</title>
</head>
<body>
    

<?php

    class Product {
        private $id;
        private $name;
        private $price;
        private $category;
        private $image;

        public function __construct($id, $name, $price, $category, $image) {
            $this->id = $id;
            $this->name = $name;
            $this->price = $price;
            $this->category = $category;
            $this->image = $image;
        }

        public function getId() {
            return $this->id;
        }

        public function getName() {
            return $this->name;
        }
        public function setName($name) {
            $this->name = $name;
        }

        public function getPrice() {
            return $this->price;
        }
        public function setPrice($price) {
            $this->price = $price;
        }

        public function getCategory() {
            return $this->category;
        }
        public function setCategory($category) {
            $this->categoria = $category;
        }

        public function getImage() {
            return $this->image;
        }
        public function setImage($image) {
            $this->image = $image;
        }
    }

    class Typology extends Product {
        private $type;

        public function __construct($id, $name, $price, $category, $image, $type) {
            parent::__construct($id, $name, $price, $category, $image);
            $this->type = $type;
        }

        public function getType() {
            return $this->type;
        }
        public function setType($type) {
            $this->type = $type;
        }
    }

    $dogCategory = new Product(1, 'Croccantini', 10.99, 'https://previews.123rf.com/images/dstarky/dstarky1701/dstarky170101131/69423991-icona-cane-o-il-logo-in-stile-linea-moderna-l-alta-qualit%C3%A0-pittogramma-contorno-nero-per-la.jpg', 'https://arcaplanet.vtexassets.com/arquivos/ids/262555/virtus-dog-adult-rustic-crocchette.jpg?v=637673152432870000');
    $typology1 = new Typology(1, $dogCategory->getName(), $dogCategory->getPrice(), $dogCategory->getCategory(), $dogCategory->getImage(), 'Secco');

    $dogCategory = new Product(2, 'Corda', 12.50, 'https://previews.123rf.com/images/dstarky/dstarky1701/dstarky170101131/69423991-icona-cane-o-il-logo-in-stile-linea-moderna-l-alta-qualit%C3%A0-pittogramma-contorno-nero-per-la.jpg', 'https://arcaplanet.vtexassets.com/arquivos/ids/269125/yes-gioco-corda-cane-30cm-bianco.jpg?v=637823342280300000');
    $typology2 = new Typology(2, $dogCategory->getName(), $dogCategory->getPrice(), $dogCategory->getCategory(), $dogCategory->getImage(), 'Gioco');

    $dogCategory = new Product(3, 'Biscottini', 10.99, 'https://previews.123rf.com/images/dstarky/dstarky1701/dstarky170101131/69423991-icona-cane-o-il-logo-in-stile-linea-moderna-l-alta-qualit%C3%A0-pittogramma-contorno-nero-per-la.jpg', 'https://arcaplanet.vtexassets.com/arquivos/ids/285266/cappuccino--1-.jpg?v=638194096976300000');
    $typology3 = new Typology(3, $dogCategory->getName(), $dogCategory->getPrice(), $dogCategory->getCategory(), $dogCategory->getImage(), 'Secco');

    $catCategory = new Product(4, 'Croccantini', 8.99, 'https://as1.ftcdn.net/v2/jpg/03/27/63/14/1000_F_327631420_6tn7qBUphpPEzBKuHJp9TgAAFc8Snsxk.jpg', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0zM-F4B5FnbBuSC49sR97Wxdd1a_rlKqUtw&usqp=CAU');
    $typology4 = new Typology(4, $catCategory->getName(), $catCategory->getPrice(), $catCategory->getCategory(), $catCategory->getImage(), 'Umido');

    $catCategory = new Product(5, 'Tiragraffi', 46.99, 'https://as1.ftcdn.net/v2/jpg/03/27/63/14/1000_F_327631420_6tn7qBUphpPEzBKuHJp9TgAAFc8Snsxk.jpg', 'https://arcaplanet.vtexassets.com/arquivos/ids/279208/lovedi-tiragraffi-delaware.jpg?v=638102388893670000');
    $typology5 = new Typology(5, $catCategory->getName(), $catCategory->getPrice(), $catCategory->getCategory(), $catCategory->getImage(), 'Gioco');

    $catCategory = new Product(6, 'Vestito Natalizio', 15.55, 'https://as1.ftcdn.net/v2/jpg/03/27/63/14/1000_F_327631420_6tn7qBUphpPEzBKuHJp9TgAAFc8Snsxk.jpg', 'https://shop-cdn-m.mediazs.com/bilder/9/400/114905_pla_hundemantel_santa_hs_01_9.jpg');
    $typology6 = new Typology(6, $catCategory->getName(), $catCategory->getPrice(), $catCategory->getCategory(), $catCategory->getImage(), 'Vestiti');
?>

<h1>SHOP</h1>
<div class="row">
    <div class="card">
        <div class="img-container">
            <img src="<?php echo $typology1->getImage()?> " alt="img typology1">
        </div>
        <h2><?php echo $typology1->getName()?></h2>
        <p><?php echo $typology1->getPrice()?> &euro;</p>
        <div class="logo-container">
            <img src="<?php echo $typology1->getCategory()?> " alt="img typology1">
        </div>
        <p>Tipologia: <?php echo $typology1->getType()?></p>
    </div>

    <div class="card">
        <div class="img-container">
            <img src="<?php echo $typology5->getImage()?> " alt="img typology5">
        </div>
        <h2><?php echo $typology5->getName()?></h2>
        <p><?php echo $typology5->getPrice()?> &euro;</p> 
        <div class="logo-container">
            <img src="<?php echo $typology5->getCategory()?> " alt="img typology5">
        </div>
        <p>Tipologia: <?php echo $typology5->getType()?></p>
    </div>

    <div class="card">
        <div class="img-container">
            <img src="<?php echo $typology2->getImage()?> " alt="img typology2">
        </div>
        <h2><?php echo $typology2->getName()?></h2>
        <p><?php echo $typology2->getPrice()?> &euro;</p>
        <div class="logo-container">
            <img src="<?php echo $typology2->getCategory()?> " alt="img typology2">
        </div>
        <p>Tipologia: <?php echo $typology2->getType()?></p>
    </div>

    <div class="card">
        <div class="img-container">
            <img src="<?php echo $typology3->getImage()?> " alt="img typology3">
        </div>
        <h2><?php echo $typology3->getName()?></h2>
        <p><?php echo $typology3->getPrice()?> &euro;</p>
        <div class="logo-container">
            <img src="<?php echo $typology3->getCategory()?> " alt="img typology3">
        </div>
        <p>Tipologia: <?php echo $typology3->getType()?></p>
    </div>

    <div class="card">
        <div class="img-container">
            <img src="<?php echo $typology4->getImage()?> " alt="img typology4">
        </div>
        <h2><?php echo $typology4->getName()?></h2>
        <p><?php echo $typology4->getPrice()?> &euro;</p>
        <div class="logo-container">
            <img src="<?php echo $typology4->getCategory()?> " alt="img typology4">
        </div>
        <p>Tipologia: <?php echo $typology4->getType()?></p>
    </div>

    <div class="card">
        <div class="img-container">
            <img src="<?php echo $typology6->getImage()?> " alt="img typology6">
        </div>
        <h2><?php echo $typology6->getName()?></h2>
        <p><?php echo $typology6->getPrice()?> &euro;</p>
        <div class="logo-container">
            <img src="<?php echo $typology6->getCategory()?> " alt="img typology6">
        </div>
        <p>Tipologia: <?php echo $typology6->getType()?></p>
    </div>
</div>

</body>
</html>