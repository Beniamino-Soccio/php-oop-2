<?php
    require_once __DIR__ . "/Product.php";
    class Game extends Product{
        public $material;
        public $animalAge;

        public function __construct(string $material, string $animalAge, string $name, float $price, string $imgUrl, Category $category, int $numberInStock){
            parent::__construct($name, $price, $imgUrl, $category, $numberInStock);
            $this->material = $material;
            $this->animalAge = $animalAge;
        }
    }

?>