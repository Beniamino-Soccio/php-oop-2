<?php
    require_once __DIR__ . "/Product.php";
    class Food extends Product{
        public $ingredient;
        public $weight;

        public function __construct(array $ingredient, float $weight, string $name, float $price, string $imgUrl, Category $category, int $numberInStock){
            $this->ingredient = $ingredient;
            $this->weight = $weight;
            parent::__construct($name, $price, $imgUrl, $category, $numberInStock);
        }
    }

?>