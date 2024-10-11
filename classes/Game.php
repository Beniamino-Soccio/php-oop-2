<?php
    require_once __DIR__ . "/Product.php";
    class Games extends Product{
        public $material;
        public $animalAge;

        public function __construct(array $material, int $animalAge, string $name, float $price, string $imgUrl, Category $category, int $numberInStock){
            $this->material = $material;
            $this->animalAge = $animalAge;
            parent::__construct($name, $price, $imgUrl, $category, $numberInStock);
        }
    }

?>