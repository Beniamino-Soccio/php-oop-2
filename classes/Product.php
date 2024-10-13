<?php
    require_once __DIR__ . "/Category.php";
    require_once __DIR__ . "/Game.php";
    require_once __DIR__ . "/Food.php";
    require_once __DIR__ . "/Kennel.php";
    class Product{
        public $name;
        public $price;
        public $imgUrl;
        public Category $category;
        public int $numberInStock;

        public function __construct(string $name, float $price, string $imgUrl, Category $category, int $numberInStock){
            $this->name = $name;
            $this->price = $price;
            $this->imgUrl = $imgUrl;
            $this->category = $category;
            $this->numberInStock = $numberInStock;
        }

        public function getName(){
            return "name: $this->name";
        } 
        public function getPrice(){
            return "Price: $this->price";
        }
        public function getImgUrl(){
            return "ImgUrl: $this->imgUrl";
        }
        public function getNumInStock(){
            return "Num in stock: $this->numberInStock";
        }
    }

?>