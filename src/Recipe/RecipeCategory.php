<?php


namespace OrdbModels\Recipe;


class RecipeCategory
{
    public string $name;
    /** @var Recipe[]  */
    public array $recipePartials;
}