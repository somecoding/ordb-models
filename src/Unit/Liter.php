<?php


namespace OrdbModels\Unit;


class Liter extends Unit
{
    protected string $referenceUnitClass = Mililiter::class;
    protected int $conversionFactor = 1/1000;
    protected string $shortCode = 'l';
}