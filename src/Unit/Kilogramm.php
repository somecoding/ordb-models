<?php


namespace OrdbModels\Unit;


class Kilogramm extends Unit
{
    protected float $conversionFactor = 1/1000;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'kg';
}