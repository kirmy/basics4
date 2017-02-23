<?php
// Class Dish
class Dish {
    private $ingredients = [];
 // Конструктор принимает массив объектов или один объект Ingredient или вообще ничего 
    function __construct($ingredients = null) {
        if (isset($ingredients)) {
            if (is_array($ingredients))
// Массив Ingredient
                foreach($ingredients as $ingredient) {  
// Проверка, чтоб не подсунули не Ingredient                    
                    if ($ingredient instanceof Ingredient) {
                        echo "ingredient->GetName():",$ingredient->GetName(), PHP_EOL;
                        $this->ingredients[] = $ingredient;
                    }
                    else 
// Все же подсунули не Ingredient  
                        echo "It's no Ingredient ", var_dump($ingredient);       
                }
// Один Ingredients            
            elseif ($ingredients instanceof Ingredient) {
                echo "GetName:", $ingredients->GetName(), PHP_EOL;
                $this->ingredients[] = $ingredients;
            }
        }
    }
    function AddIngredient($_ingredient) {
        if ($_ingredient instanceof Ingredient) {
            $this->ingredients[] = $_ingredient;
        } 
        else {
            echo "It's no Ingredient ! ", var_dump($_ingredient);
            return false;
        }
    }
    function GetTotal() {
        $total = 0;
        foreach($this->ingredients as $ingredient) {
            $total += $ingredient->GetCost();
        }
        return $total;
    }
}
