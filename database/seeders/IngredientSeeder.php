<?php

namespace Database\Seeders;

use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        $IngredientList = [
            'Simple syrup, Water, Bitters, Ice, Bourbon', '¾ fluid ounce campari, ¾ fluid ounce gin, ¾ fluid ounce sweet vermouth',
            '1 cup ice cubes, 1 ½ fluid ounces light rum, 1 fluid ounce lime juice', '2 ½ fluid ounces gin, ½ fluid ounce dry vermouth, 1 pitted green olive, 1 cup ice',
            'Tequila, Triple Sec, Lime, Salt', '1 ½ fluid ounces vodka, 1 ½ fluid ounces coffee-flavored liqueur, 1 fluid ounce white creme de cacao, 1 fluid ounce brewed espresso, 1 cup ice',
            '5 fluid ounces whiskey, 2 fluid ounces fresh lemon juice, 1 fluid ounce simple syrup, 1 cup ice cubes, or as needed', '2 fluid ounces rye whiskey, ½ fluid ounce sweet vermouth, 1 dash Angostura bitters, 1 cup ice cubes, 1 maraschino cherry',
            'Ice, Prosecco, Club soda, Aperol, Orange', 'Rum, Mint, Lime, Sugar, Club Soda',
        ];
        foreach ($IngredientList as $ingredient) {
            $newIngredient = new Ingredient();
            $newIngredient->name = $ingredient;
            $newIngredient->color = $faker->unique()->safeHexColor();
            $newIngredient->save();
        }
    }
}
