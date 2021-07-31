<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;

class Recipe
{
    public ?string $title;
    public string $description;
    public ?DateInterval $preparationTime;
    public ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    public array $ingredientAmount;
    /** @var RecipePartial[] */
    public array $partials;

    /** @var RecipeCategory[] */
    public array $recipeCategories;

}