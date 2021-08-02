<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;
use OrdbModels\TypeAttribute;

class RecipePartial
{
    /** @var Step[] */
    #[TypeAttribute(Step::class)]
    public array $steps;
    public string $description;
    public ?string $type = null;
    public ?DateInterval $preparationTime;
    public ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    #[TypeAttribute(IngredientAmount::class)]
    public array $ingredientAmount;
    /** @var RecipePartialCategory[] */
    #[TypeAttribute(RecipePartialCategory::class)]
    public array $recipePartialCategories;

}