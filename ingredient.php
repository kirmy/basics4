<?php
// Class Ingredient  
class Ingredient {
    private $name; 
    private $cost;
    function __construct($_name, $_cost) {
        $this->name = $_name;
        $this->cost = $_cost;
    } 
    public function GetName() {
        return $this->name;
    }
    public function GetCost() {
        return $this->cost;
    }
    public function SetCost($newCost) {
        if (is_numeric($newCost))
            $this->cost = $newCost;
        else echo "It's no number !", PHP_EOL;    
    } 
}