<?php


namespace OrdbModels\Unit;


class Milligramm extends Unit
{
    protected int $conversionFactor = 10;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'mg';
}