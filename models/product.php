
<?php
    class Product {
        private $id;
        private $name;
        private $price;
        private $category;
        private $image;

        public function __construct($id, $name, $price, $category, $image) {
            $this -> setId($id);
            $this-> setName($name);
            $this-> setPrice($price);
            $this-> setCategory($category);
            $this-> setImage($image);
        }

        public function getId() {
            return $this->id;
        }
        public function setId($id) {
            $this->id = $id;
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
            $this->category = $category;
        }

        public function getImage() {
            return $this->image;
        }
        public function setImage($image) {
            $this->image = $image;
        }
    }