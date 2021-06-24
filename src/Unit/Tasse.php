<?php


namespace OrdbModels\Unit;


class Tasse extends Unit
{
    protected float $conversionFactor = 200;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'Tas';
}