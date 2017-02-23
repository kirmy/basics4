<?php
require_once "ingredient.php"; 
require_once "dish.php";
    
$cake = new Ingredient("Tort", 10);
echo $cake->GetName(), $cake->GetCost(), PHP_EOL;
//Проверка изменить стоимость нечислом
$cake->SetCost("5d20");
$dish = new Dish;
$dish->AddIngredient($cake);
$salo = new Ingredient("Salo", 100);
$dish->AddIngredient($salo);
//Проверка добавить не Ingredient
$dish->AddIngredient("Pepper");
echo "Total: ", $dish->GetTotal(), PHP_EOL;
$dish2 = new Dish([new Ingredient("Apple", 5), new Ingredient("Salt", 1)]);
var_dump($dish2);
$dish3 = new Dish(new Ingredient("Sugar", 25));
var_dump($dish3);
$dish4 = new Dish([new Ingredient("Milk", 17), 123123]);
var_dump($dish4);