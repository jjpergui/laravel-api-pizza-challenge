<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        /**
         * Pizzas
         */
        $category = new Category;
        $category->name = 'Pizza';
        $category->priority = 1;
        $category->save();
        $category->refresh();

        $product = new Product;
        $product->name = 'Alfredo Chicken Pizza';
        $product->description = 'Alfredo sauce, mozzarella cheese, mushrooms & broccoli.';
        $product->price = 10.9;
        $product->picture = 'https://bmpp.com/images/items/pizza/alfredo-chicken.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Cinque Fromaggi';
        $product->description = 'Homemade tomato sauce, mozzarella cheese, parmesan, ricotta & cheddar cheese.';
        $product->price = 9;
        $product->picture = 'https://bmpp.com/images/items/pizza/cheese-lovers.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Suro Pizza';
        $product->description = 'With homemade tomato sauce, mozzarella cheese, Canadian bacon, mushrooms, red onions & fresh cilantro.';
        $product->price = 12;
        $product->picture = 'https://bmpp.com/images/items/pizza/margerhita.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Pineapple Lovers';
        $product->description = 'With homemade tomato sauce, mozzarella cheese, Canadian bacon & pineapple.';
        $product->price = 10;
        $product->picture = 'https://bmpp.com/images/items/pizza/hawaiian.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Bresaola Bocconchini';
        $product->description = 'Mozzarella cheese, feta cheese, egg scrambled, slice of butter, sprinkle of salt & black pepper.';
        $product->price = 8;
        $product->picture = 'https://bmpp.com/images/items/egg-gondola/cyo.png';
        $product->category_id = $category->id;
        $product->save();


        $product = new Product;
        $product->name = 'Vegetariana';
        $product->description = 'As the name suggests, this pizza is dedicated to our vegetarian friends or those of us who try to keep an eye on their line. Its garnish is made entirely of fresh vegetables such as eggplant or sun-dried tomatoes.';
        $product->price = 8;
        $product->picture = 'https://bmpp.com/images/items/pizza/veggie.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Vesubio';
        $product->description = 'Cali sauce, mozzarella cheese, mushrooms, grilled chicken breast, fresh basil & sun-dried tomatoes.';
        $product->price = 6;
        $product->picture = 'https://bmpp.com/images/items/pizza/god-father.png';
        $product->category_id = $category->id;
        $product->save();


        $product = new Product;
        $product->name = 'Burger Pizza';
        $product->description = 'With homemade tomato sauce, mozzarella cheese, pepperoni, salami, Canadian bacon, prosciutto, sausage & meatballs.';
        $product->price = 9.9;
        $product->picture = 'https://bmpp.com/images/items/pizza/meat-lovers.png';
        $product->category_id = $category->id;
        $product->save();

        /**
         * Pasta
         */
        $category = new Category;
        $category->name = 'Pasta';
        $category->priority = 2;
        $category->save();

        $product = new Product;
        $product->name = 'Rock N Roll';
        $product->description = 'Filled with cheesy cream and high quality chicken meat to feed your appetite';
        $product->price = 6;
        $product->picture = 'https://i.ibb.co/T4tz7xy/rock-n-roll-pasta.jpg';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Chicken Parmigiana';
        $product->description = 'Penne or spaghetti. Served with garlic bread. Marinara sauce, parmesan & mozzarella cheese.';
        $product->price = 7;
        $product->picture = 'https://bmpp.com/images/items/pasta/chicken-parmigiana.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Eggplant Parmigiana cheese Rolls';
        $product->description = 'Penne or spaghetti. Served with garlic bread. Marinara sauce, parmesan & mozzarella cheese.';
        $product->price = 9.9;
        $product->picture = 'https://bmpp.com/images/items/pasta/eggplant-parmigiana-cheese-rolls.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Cheese Lasagna Rolls with Marinara Sauce';
        $product->description = 'Served with garlic bread.';
        $product->price = 7.9;
        $product->picture = 'https://bmpp.com/images/items/pasta/cheese-lasagna-rolls.png';
        $product->category_id = $category->id;
        $product->save();


        /**
         * Drinks
         */
        $category = new Category;
        $category->name = 'Drinks';
        $category->priority = 3;
        $category->save();

        $product = new Product;
        $product->name = 'Cola 0.2L';
        $product->description = 'A cold can of cola';
        $product->price = 1.8;
        $product->picture = 'https://bmpp.com/images/items/drink/can.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = '2 Liter';
        $product->description = 'Coke, Diet Coke, Dr. Pepper, Root Beer, Sprite.';
        $product->price = 3.5;
        $product->picture = 'https://bmpp.com/images/items/drink/two-liter.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Beer';
        $product->description = 'A cold can of beer';
        $product->price = 2;
        $product->picture = '';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'San Pellegrino Sparkling Water 0.5L';
        $product->description = 'A cold bootle of water';
        $product->price = 1.8;
        $product->picture = 'https://bmpp.com/images/items/drink/san-pellegrino.png';
        $product->category_id = $category->id;
        $product->save();

        $product = new Product;
        $product->name = 'Assorted 6 Pack Canned Soda';
        $product->description = 'Coke, Diet Coke, Dr. Pepper, Root Beer, Sprite.';
        $product->price = 3.5;
        $product->picture = 'https://bmpp.com/images/items/drink/six-pack-assort.png';
        $product->category_id = $category->id;
        $product->save();
    }
}
