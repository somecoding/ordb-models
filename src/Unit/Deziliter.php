<?php


namespace OrdbModels\Unit;


class Deziliter extends Unit
{
    protected float $conversionFactor = 1/100;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'dl';
}