<?php

namespace Database\Seeders;

use App\Models\Cocktail;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Faker\Generator as Faker;

class CocktailSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(Faker $faker): void
    {
        
        $cocktails = [
    [
        'cocktailName' => 'Old Fashioned',
        'ingredients' => 'Simple syrup, Water, Bitters, Ice, Bourbon',
        'garnish' => 'An orange slice and a maraschino cherry',
    ],
    [
        'cocktailName' => 'Negroni',
        'ingredients' => '¾ fluid ounce campari, ¾ fluid ounce gin, ¾ fluid ounce sweet vermouth, 2 fluid ounces carbonated water, 1 wedge lemon, for garnish',
        'garnish' => 'Lemon wedge',
    ],
    [
        'cocktailName' => 'Daiquiri',
        'ingredients' => '1 cup ice cubes, 1 ½ fluid ounces light rum, 1 fluid ounce lime juice, 1 fluid ounce lime juice, 2 tablespoons white sugar, or as needed',
        'garnish' => 'Passion Fruit',
    ],
    [
        'cocktailName' => 'Dry Martini',
        'ingredients' => '2 ½ fluid ounces gin, ½ fluid ounce dry vermouth, 1 pitted green olive, 1 cup ice',
        'garnish' => 'Green Olive',
    ],
    [
        'cocktailName' => 'Margarita',
        'ingredients' => 'Tequila, Triple Sec, Lime, Salt',
        'garnish' => 'Lime',
    ],
    [
        'cocktailName' => 'Espresso Martini',
        'ingredients' => '1 ½ fluid ounces vodka, 1 ½ fluid ounces coffee-flavored liqueur, 1 fluid ounce white creme de cacao, 1 fluid ounce brewed espresso, 1 cup ice',
        'garnish' => '3 Maraschino cherries',
    ],
    [
        'cocktailName' => 'Whiskey Sour',
        'ingredients' => '5 fluid ounces whiskey, 2 fluid ounces fresh lemon juice, 1 fluid ounce simple syrup, 1 cup ice cubes, or as needed',
        'garnish' => 'Orange slice',
    ],
    [
        'cocktailName' => 'Manhattan',
        'ingredients' => '2 fluid ounces rye whiskey, ½ fluid ounce sweet vermouth, 1 dash Angostura bitters, 1 cup ice cubes, 1 maraschino cherry',
        'garnish' => 'Mint',
    ],
    [
        'cocktailName' => 'Aperol Spritz',
        'ingredients' => 'Ice, Prosecco, Club soda, Aperol, Orange',
        'garnish' => '',
    ],
    [
        'cocktailName' => 'Mojito',
        'ingredients' => 'Rum, Mint, Lime, Sugar, Club Soda',
        'garnish' => '',
    ],
];


        foreach ($cocktails as $cocktail) {
            $newCocktail = new Cocktail();
            $newCocktail->name = $cocktail['cocktailName'];
            $newCocktail->ingredients = $cocktail['ingredients'];
            $newCocktail->garnish = $cocktail['garnish'];
            $newCocktail->image = $faker->imageUrl(250, 200, 'Cocktail', true, 'Cocktails', true, 'png');
            $newCocktail->save();

}













    }
}
