<?php


namespace OrdbModels\Unit;


class Milligramm extends Unit
{
    protected float $conversionFactor = 10;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'mg';
}