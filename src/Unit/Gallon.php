<?php


namespace OrdbModels\Unit;


class Gallon extends Unit
{
    protected int $conversionFactor = 3800;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'gal.';
}