<?php


namespace OrdbModels\Ingredient;


use OrdbModels\Unit\Unit;

class IngredientAmount
{
    protected Ingredient $ingredient;
    protected float $amount;
    protected Unit $unit;
}