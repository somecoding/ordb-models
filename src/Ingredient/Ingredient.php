<?php


namespace OrdbModels\Ingredient;


use OrdbModels\Storage\ItemDefinition;

class Ingredient extends ItemDefinition
{
    protected IngredientCategory $category;
}