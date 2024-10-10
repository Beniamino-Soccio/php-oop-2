<?php

    class Games{
        public $material;
        public $ageAnimal;

        public function __construct(array $material, int $ageAnimal){
            $this->material = $material;
            $this->ageAnimal = $ageAnimal;
        }
    }

?>