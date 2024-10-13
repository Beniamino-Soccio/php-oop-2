<?php 

trait Position{
    public $row;
    public $col;

    public function getRow() : int{
        return $this->row;
    }

    public function getCol() : int{
        return $this->col;
    }
}