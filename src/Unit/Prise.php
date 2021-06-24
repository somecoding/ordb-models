<?php


namespace OrdbModels\Unit;


class Prise extends Unit
{
    protected float $conversionFactor = 4/100;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'Pr';

}