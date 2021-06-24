<?php


namespace OrdbModels\Unit;


class Tropfen extends Unit
{
    protected float $conversionFactor = 1/15;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'Tr';

}