<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;

class RecipePartial
{
    /** @var Step[] */
    protected array $steps;
    protected string $description;
    protected ?string $type = null;
    protected ?DateInterval $preparationTime;
    protected ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    protected array $ingredientAmount;
    /** @var RecipePartialCategory[] */
    protected array $recipePartialCategories;

}