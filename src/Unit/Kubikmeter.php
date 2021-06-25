<?php


namespace OrdbModels\Unit;


class Kubikmeter extends Unit
{
    protected float $conversionFactor = 1000;
    protected string $referenceUnitClass = Liter::class;
    protected string $shortCode = 'm³';
}