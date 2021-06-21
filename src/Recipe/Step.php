<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;

class Step
{
    protected string $description;
    protected ?string $title;
    protected ?DateInterval $preparationTime;
    protected ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    protected array $ingredientAmount;
}