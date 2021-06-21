<?php


namespace OrdbModels\Unit;


class FluidOunce extends Unit
{
    protected int $conversionFactor = 284/100; //0,028 Liter
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'fl. oz.';

}