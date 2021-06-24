<?php


namespace OrdbModels\Unit;


class Pint extends Unit
{
    protected float $conversionFactor = 470;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'pt.';
}