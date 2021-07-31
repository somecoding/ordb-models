<?php


namespace OrdbModels\Ingredient;


use OrdbModels\Unit\Unit;

class IngredientAmount
{
    public Ingredient $ingredient;
    public float $amount;
    public Unit $unit;
}