<?php


namespace OrdbModels\Unit;


class Quart extends Unit
{
    protected float $conversionFactor = 950;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'qt.';
}