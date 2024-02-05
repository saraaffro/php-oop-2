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

class Food extends Product {
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

$dogCategory = new Product(1, 'Croccantini', 10.99, 'Cani', 'https://www.naturepetshop.it/wp-content/uploads/cibo-secco-per-cani-300x215.jpg');
$food1 = new Food(1, $dogCategory->getName(), $dogCategory->getPrice(), $dogCategory->getCategory(), $dogCategory->getImage(), 'Secco');

$catCategory = new Product(2, 'Croccantini', 8.99, 'Gatti', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQ0zM-F4B5FnbBuSC49sR97Wxdd1a_rlKqUtw&usqp=CAU');
$food2 = new Food(2, $catCategory->getName(), $catCategory->getPrice(), $catCategory->getCategory(), $catCategory->getImage(), 'Umido');


echo "ID: {$food1->getId()}<br>";
echo "Nome: {$food1->getName()}<br>";
echo "Prezzo: {$food1->getPrice()}<br>";
echo "Categoria: {$food1->getCategory()}<br>";
echo "Immagine: {$food1->getImage()}<br>";
echo "Tipo: {$food1->getType()}<br>";

echo "<br>";

echo "ID: {$food2->getId()}<br>";
echo "Nome: {$food2->getName()}<br>";
echo "Prezzo: {$food2->getPrice()}<br>";
echo "Categoria: {$food2->getCategory()}<br>";
echo "Immagine: {$food2->getImage()}<br>";
echo "Tipo: {$food2->getType()}<br>";
?>