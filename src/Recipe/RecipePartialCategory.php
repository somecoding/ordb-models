<?php


namespace OrdbModels\Recipe;


class RecipePartialCategory
{
    public string $name;
    /** @var RecipePartial[]  */
    public array $recipePartials;
}