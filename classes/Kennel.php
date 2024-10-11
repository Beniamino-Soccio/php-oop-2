<?php
    require_once __DIR__ . "/Product.php";
    class Kennels extends Product{
        public $material;
        public $size;

        public function __construct(string $material, string $size,string $name, float $price, string $imgUrl, Category $category, int $numberInStock){
            $this->material = $material;
            $this->size = $size;
            parent::__construct($name, $price, $imgUrl, $category, $numberInStock);
        }
    }

?>