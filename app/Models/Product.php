<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name'];
    protected $hidden = ['created_at', 'updated_at', 'ingredients'];
    protected $casts = [
        'price' => 'float'
    ];
    protected $appends = ['ingredient_names', 'calculated_price'];
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient');
    }

    public function getIngredientNamesAttribute()
    {
        if ($this->ingredients->isNotEmpty()) {
            $ingredients = $this->ingredients->pluck('name')->all();
//            $ingredient_sum = $this->ingredients->sum('price');
//            $result = $this->ingredients->sum('price');
//            return $result;
            return implode(', ', $ingredients);
        }
        return null;
    }

    public function getPriceAttribute() // Add Mutator to previous price
    {
        if ($this->ingredients->isNotEmpty()) {
            $price = $this->ingredients->sum('price');
            $price = $price * 1.5;
            return $price;
        }
        return null;
    }

    public function getCalculatedPriceAttribute() // Get list of ingredients in this pizza
    {
        if ($this->ingredients->isNotEmpty()) {
            $price = $this->ingredients->sum('price');
            $price = $price * 1.5;
            return $price;
        }
        return null;
    }

}
