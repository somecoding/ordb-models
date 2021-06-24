<?php


namespace OrdbModels\Unit;


class Mililiter extends Unit
{
    protected string $referenceUnitClass = Mililiter::class;
    protected float $conversionFactor = 1;
    protected string $shortCode = 'ml';

}