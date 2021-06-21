<?php


namespace OrdbModels\Unit;


class Centiliter extends Unit
{
    protected int $conversionFactor = 1/10;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'cl';
}