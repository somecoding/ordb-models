<?php


namespace OrdbModels\Recipe;


use OrdbModels\TypeAttribute;

class RecipePartialCategory
{
    public string $name;
    /** @var RecipePartial[]  */
    #[TypeAttribute(RecipePartial::class)]
    public array $recipePartials;
}