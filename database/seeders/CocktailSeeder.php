<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Cocktail;
use App\Models\Ingredient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
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
                'category_id' => 1,
                'name' => 'Old Fashioned',
                'garnish' => 'An orange slice and a maraschino cherry',
                'image' => 'https://imagesvc.meredithcorp.io/v3/mm/image?url=https%3A%2F%2Fimages.media-allrecipes.com%2Fuserphotos%2F7627922.jpg&q=60&c=sc&orient=true&poi=auto&h=512'
            ],
            [
                'category_id' => 5,
                'name' => 'Negroni',
                'garnish' => 'Lemon wedge',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQLUPUprEwHSzmnWZCWGqnixzCzVaZKtvIz_Q&usqp=CAU'
            ],
            [
                'category_id' => 6,
                'name' => 'Daiquiri',
                'garnish' => 'Passion Fruit',
                'image' => 'https://www.allrecipes.com/thmb/rb0oWVcYMht7IEYB6eAmF1NiUFw=/750x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/1016644-1446b79288da4aae9682c8d6e2fb3b6b.jpg'
            ],
            [
                'category_id' => 4,
                'name' => 'Dry Martini',
                'garnish' => 'Green Olive',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQIZOusp1n5TWYjUKbQFuDrNbP51Q0P76vVQw&usqp=CAU'
            ],
            [
                'category_id' => 2,
                'name' => 'Margarita',
                'garnish' => 'Lime',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRuxC5c11xr98gOpFRSh9ZmpE0ZW0Isa855Wg&usqp=CAU'
            ],
            [
                'category_id' => 3,
                'name' => 'Espresso Martini',
                'garnish' => '3 Maraschino cherries',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS7Vo47os4wcv0KvWfjH9YkM1ko-LspUyX1lw&usqp=CAU'
            ],
            [
                'category_id' => 3,
                'name' => 'Whiskey Sour',
                'garnish' => 'Orange slice',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTccCIfM7ymJk-NWhsQa9Wo99AiCWGVx7CGwA&usqp=CAU'
            ],
            [
                'category_id' => 2,
                'name' => 'Manhattan',
                'garnish' => 'cherry and black olive',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRyRAc1JuSIzd4M7RACChWUhW6-Ov15c2utrQ&usqp=CAU'
            ],
            [
                'category_id' => 4,
                'name' => 'Aperol Spritz',
                'garnish' => 'Orange slices and sugar ',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRSzlffXFImMMKxRGToPE1J8fUs-w3nSIxPJA&usqp=CAU'
            ],
            [
                'category_id' => 5,
                'name' => 'Mojito',
                'garnish' => 'Mint an Lime',
                'image' => 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSJLfD2bQZ2gmSZHqUQBs9QNEdFsonyR6ZiRw&usqp=CAU'
            ],

        ];


        $ingredientIds = Ingredient::all()->pluck('id')->toArray();

        foreach ($cocktails as $cocktail) {

            $newCocktail = new Cocktail();
            $newCocktail->category_id = $cocktail['category_id'];
            $newCocktail->name = $cocktail['name'];
            $newCocktail->slug = Str::of($newCocktail->name)->slug('-');
            $newCocktail->garnish = $cocktail['garnish'];
            $newCocktail->image = $cocktail['image'];
            $newCocktail->save();
            $newCocktail->slug = Str::of("$newCocktail->id " . $newCocktail->name)->slug('-');
            $newCocktail->save();

            $newCocktail->ingredients()->sync([$faker->randomElement($ingredientIds)]);
        }
    }
}
