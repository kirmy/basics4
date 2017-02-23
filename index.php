
<?php
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
        $this->cost = $newCost;
    } 
}
class Dish {
    private $ingredients = array();
    function AddIngredient($_ingredient) {
        if ($_ingredient instanceof Ingredient) {
            $ingredients[] = $_ingredient;
            echo "Ingredient ", count($ingredients);
        } 
        else {
            echo "No Ingredient !";
            return false;}
    }
}
//Ingredient::GetName() 
// function Ingredient::GetCost() {
//     return $cost;
// }
// Ingredient::SetCost($newCost) {

// }

$cake = new Ingredient("Tort", 10);
echo $cake->GetName(), $cake->GetCost();
$cake->SetCost(20);
var_dump($cake);
$dish = new Dish;
$dish->AddIngredient($cake);
$salo = new Ingredient("Salo", 100);
$dish->AddIngredient($salo);
var_dump($dish);