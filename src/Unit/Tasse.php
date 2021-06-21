<?php


namespace OrdbModels\Unit;


class Tasse extends Unit
{
    protected int $conversionFactor = 200;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'Tas';
}