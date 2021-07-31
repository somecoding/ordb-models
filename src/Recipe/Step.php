<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;

class Step
{
    public string $description;
    public ?string $title;
    public ?DateInterval $preparationTime;
    public ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    public array $ingredientAmount;
    public string $languageIdentifierISO;
}