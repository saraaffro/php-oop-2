<?php
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
