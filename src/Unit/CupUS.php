<?php


namespace OrdbModels\Unit;


class CupUS extends Unit
{
    protected float $conversionFactor = 238;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'c';
}