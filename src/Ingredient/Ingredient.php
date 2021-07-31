<?php


namespace OrdbModels\Ingredient;


use OrdbModels\Storage\Product;

class Ingredient extends Product
{
    public IngredientCategory $category;
}