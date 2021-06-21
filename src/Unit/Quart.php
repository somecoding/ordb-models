<?php


namespace OrdbModels\Unit;


class Quart extends Unit
{
    protected int $conversionFactor = 950;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'qt.';
}