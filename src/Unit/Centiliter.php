<?php


namespace OrdbModels\Unit;


class Centiliter extends Unit
{
    protected string $conversionFactor = '10';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'cl';
}