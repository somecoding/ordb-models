<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;

class Recipe
{
    protected ?string $title;
    protected string $description;
    protected ?DateInterval $preparationTime;
    protected ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    protected array $ingredientAmount;
    /** @var RecipePartial[] */
    protected array $partials;

    /** @var RecipeCategory[] */
    protected array $recipeCategories;

}