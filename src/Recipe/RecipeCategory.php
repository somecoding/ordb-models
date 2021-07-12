<?php


namespace OrdbModels\Recipe;


class RecipeCategory
{
    protected string $name;
    /** @var Recipe[]  */
    protected array $recipePartials;
}