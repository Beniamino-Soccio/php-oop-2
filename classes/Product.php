<?php
    require_once __DIR__ . "/Category.php";
    require_once __DIR__ . "/Game.php";
    require_once __DIR__ . "/Food.php";
    require_once __DIR__ . "/Kennel.php";
    require_once __DIR__ . "/../traits/Position.php";
    class Product{
        public $name;
        public $price;
        public $imgUrl;
        public Category $category;
        public int $numberInStock;
        use Position;

        public function __construct(string $name, float $price, string $imgUrl, Category $category, int $numberInStock, int $row, int $col){
            $this->name = $name;
            $this->price = $price;
            $this->imgUrl = $imgUrl;
            $this->category = $category;
            $this->numberInStock = $numberInStock;
            $this->row = $row;
            $this->col = $col;
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