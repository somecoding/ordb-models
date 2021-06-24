<?php


namespace OrdbModels\Unit;


class Gallon extends Unit
{
    protected float $conversionFactor = 3800;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'gal.';
}