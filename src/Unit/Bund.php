<?php


namespace OrdbModels\Unit;


class Bund extends Unit
{
    protected float $conversionFactor = 1;
    protected string $referenceUnitClass = Bund::class;
    protected string $shortCode = 'Bd';

}