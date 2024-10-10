<?php

    class Kennels{
        public $materials;
        public $size;

        public function __construct(array $materials, float $size){
            $this->materials = $materials;
            $this->size = $size;
        }
    }

?>