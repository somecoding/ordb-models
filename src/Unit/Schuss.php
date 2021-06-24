<?php


namespace OrdbModels\Unit;


class Schuss extends Unit
{

    protected float $conversionFactor = 10;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'Schuss';
}