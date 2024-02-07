
<?php

    trait Discountable {
        protected $discount;


        public function getDiscount() {
            return $this->discount;
        }
        public function setDiscount($discount) {
            $this->discount = $discount;
        }

        public function hasDiscount() {
            return $this->discount > 0;
        }
    }


    class Product {

        private $id;
        private $name;
        private $price;
        private $category;
        private $image;
        private $type;
        use Discountable;

        public function __construct($id, $name, $price, $category, $image, $type, $discount) {
            $this -> setId($id);
            $this-> setName($name);
            $this-> setPrice($price);
            $this-> setCategory($category);
            $this-> setImage($image);
            $this-> setType($type);
            $this -> setDiscount($discount);
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

        public function getType() {
            return $this->type;
        }
        public function setType($type) {
            $this->type = $type;
        }
    }

    