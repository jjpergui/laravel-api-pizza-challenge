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
    protected $appends = ['ingredient_names'];
    public function ingredients()
    {
        return $this->belongsToMany('App\Models\Ingredient');
    }

    public function getIngredientNamesAttribute()
    {
        if ($this->ingredients->isNotEmpty()) {
            $ingredients = $this->ingredients->pluck('name')->all();
            return implode(', ', $ingredients);
        }
        return null;
    }

}
