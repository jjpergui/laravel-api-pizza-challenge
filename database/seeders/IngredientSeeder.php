<?php
namespace Database\Seeders;

use App\Models\Ingredient;
use App\Models\Product;
use Illuminate\Database\Seeder;

class IngredientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $mincedMeat = new Ingredient();
        $mincedMeat->name = 'Carne picada';
        $mincedMeat->price = 1.8;
        $mincedMeat->save();
        $mincedMeat->refresh();

        $pomodoro = new Ingredient();
        $pomodoro->name = 'Pomodoro';
        $pomodoro->price = 1;
        $pomodoro->save();
        $pomodoro->refresh();

        $mozzarella = new Ingredient();
        $mozzarella->name = 'Mozarella';
        $mozzarella->price = 0.5;
        $mozzarella->save();
        $mozzarella->refresh();

        $onions = new Ingredient();
        $onions->name = 'Cipolla';
        $onions->price = 0.5;
        $onions->save();
        $onions->refresh();

        $pastrami = new Ingredient();
        $pastrami->name = 'Pastrami';
        $pastrami->price = 2.4;
        $pastrami->save();
        $pastrami->refresh();

        $scamorza = new Ingredient();
        $scamorza->name = 'Scamorza';
        $scamorza->price = 0.4;
        $scamorza->save();
        $scamorza->refresh();

        $driedTomato = new Ingredient();
        $driedTomato->name = 'Tomate deshidratado';
        $driedTomato->price = 0.3;
        $driedTomato->save();
        $driedTomato->refresh();

        $arugula = new Ingredient();
        $arugula->name = 'Rúcula';
        $arugula->price = 0.1;
        $arugula->save();
        $arugula->refresh();

        $cream = new Ingredient();
        $cream->name = 'Crema';
        $cream->price = 0.2;
        $cream->save();
        $cream->refresh();

        $salmon = new Ingredient();
        $salmon->name = 'Salmon';
        $salmon->price = 3;
        $salmon->save();
        $salmon->refresh();

        $ricotta = new Ingredient();
        $ricotta->name = 'Ricotta';
        $ricotta->price = 1.7;
        $ricotta->save();
        $ricotta->refresh();

        $gorgonzola = new Ingredient();
        $gorgonzola->name = 'Gorgonzola';
        $gorgonzola->price = 1.5;
        $gorgonzola->save();
        $gorgonzola->refresh();

        $mascarpone = new Ingredient();
        $mascarpone->name = 'Mascarpone';
        $mascarpone->price = 1.2;
        $mascarpone->save();
        $mascarpone->refresh();

        $granaPadano = new Ingredient();
        $granaPadano->name = 'Grana padano';
        $granaPadano->price = 0.75;
        $granaPadano->save();
        $granaPadano->refresh();

        $bocconccini = new Ingredient();
        $bocconccini->name = 'Bocconccini';
        $bocconccini->price = 2;
        $bocconccini->save();
        $bocconccini->refresh();

        $speck = new Ingredient();
        $speck->name = 'Speck';
        $speck->price = 2;
        $speck->save();
        $speck->refresh();

        $ananas = new Ingredient();
        $ananas->name = 'Piña';
        $ananas->price = 0.5;
        $ananas->save();
        $ananas->refresh();

        $parmiggiano = new Ingredient();
        $parmiggiano->name = 'Parmiggiano';
        $parmiggiano->price = 0.5;
        $parmiggiano->save();
        $parmiggiano->refresh();

        $basil = new Ingredient();
        $basil->name = 'Albahaca';
        $basil->price = 0;
        $basil->save();
        $basil->refresh();

        $oliveOil = new Ingredient();
        $oliveOil->name = 'Aceite de Oliva';
        $oliveOil->price = 0.3;
        $oliveOil->save();
        $oliveOil->refresh();

        $salmonePizza = Product::where('name', 'Salmone')->first();
        $salmonePizza->ingredients()->attach([
            $cream->id,
            $mozzarella->id,
            $salmon->id,
            $ricotta->id,
            $arugula->id
        ]);

        $cinqueFromaggi = Product::where('name', 'Cinque Fromaggi')->first();
        $cinqueFromaggi->ingredients()->attach([
            $cream->id,
            $mozzarella->id,
            $gorgonzola->id,
            $scamorza->id,
            $ricotta->id,
            $mascarpone->id
        ]);

        $settePizza = Product::where('name', 'Sette')->first();
        $settePizza->ingredients()->attach([
            $cream->id,
            $mozzarella->id,
            $gorgonzola->id,
            $scamorza->id,
            $ricotta->id,
            $mascarpone->id,
            $granaPadano->id,
            $bocconccini->id
        ]);

        $ananasPizza = Product::where('name', 'Pineapple Lovers')->first();
        $ananasPizza->ingredients()->attach([
            $pomodoro->id,
            $ananas->id,
            $mozzarella->id,
            $speck->id,
        ]);

        $burgerPizza = Product::where('name', 'Burger Pizza')->first();
        $burgerPizza->ingredients()->attach([
            $mincedMeat->id,
            $pomodoro->id,
            $mozzarella->id,
            $onions->id,
            $pastrami->id,
            $scamorza->id,
            $driedTomato->id,
            $arugula->id
        ]);

        $bresaolaBocconchini = Product::where('name', 'Bresaola Bocconchini')->first();
        $bresaolaBocconchini->ingredients()->attach([
            $mozzarella->id,
            $arugula->id,
            $speck->id,
            $parmiggiano->id,
            $driedTomato->id
        ]);

        $vesuvePizza = Product::where('name', 'Vesubio')->first();
        $vesuvePizza->ingredients()->attach([
            $mozzarella->id,
            $parmiggiano->id,
            $basil->id,
            $oliveOil->id
        ]);

        $vegetarianaPizza = Product::where('name', 'Vegetariana')->first();
        $vegetarianaPizza->ingredients()->attach([
            $mozzarella->id,
            $parmiggiano->id,
            $basil->id,
            $oliveOil->id,
            $driedTomato->id,
        ]);
    }
}
