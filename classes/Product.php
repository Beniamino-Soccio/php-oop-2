<?php

    class Product{
        public $name;
        public $price;
        public $type;
        public $imgUrl;

        public function __construct(string $name, float $price, string $type, string $imgUrl){
            $this->name = $name;
            $this->price = $price;
            $this->type = $type;
            $this->imgUrl = $imgUrl;
        }

        public function getName(){
            return "name: $this->name";
        } 
        public function getPrice(){
            return "Price: $this->price";
        } 
        public function getType(){
            return "Type: $this->type";
        } 
    }

?>