<?php

    class Food{
        public $ingredients;
        public $weight;

        public function __construct(array $ingredients, float $weight){
            $this->ingredients = $ingredients;
            $this->weight = $weight;
        }
    }

?>