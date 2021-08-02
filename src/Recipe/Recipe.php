<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;
use OrdbModels\TypeAttribute;

/** @var IngredientAmount[] */
class Recipe
{
    public ?string $title;
    public string $description;

    public ?DateInterval $preparationTime;
    public ?DateInterval $cookingTime;

    /** @var IngredientAmount[] */
    #[TypeAttribute(IngredientAmount::class)]
    public array $ingredientAmount;

    /** @var RecipePartial[] */
    #[TypeAttribute(RecipePartial::class)]
    public array $partials;

    /** @var RecipeCategory[] */
    #[TypeAttribute(RecipeCategory::class)]
    public array $recipeCategories;

}