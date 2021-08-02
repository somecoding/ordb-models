<?php


namespace OrdbModels\Recipe;


use DateInterval;
use OrdbModels\Ingredient\IngredientAmount;
use OrdbModels\TypeAttribute;

class Step
{
    public string $description;
    public ?string $title;
    public ?DateInterval $preparationTime;
    public ?DateInterval $cookingTime;
    /** @var IngredientAmount[] */
    #[TypeAttribute(IngredientAmount::class)]
    public array $ingredientAmount;
    public string $languageIdentifierISO;
}