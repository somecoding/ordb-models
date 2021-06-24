<?php


namespace OrdbModels\Unit;


class Centiliter extends Unit
{
    protected float $conversionFactor = 10;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'cl';
}