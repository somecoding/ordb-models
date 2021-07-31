<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;

class RecipePartial
{
    /** @var Step[] */
    public array $steps;
    public string $description;
    public ?string $type = null;
    public ?DateInterval $preparationTime;
    public ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    public array $ingredientAmount;
    /** @var RecipePartialCategory[] */
    public array $recipePartialCategories;

}