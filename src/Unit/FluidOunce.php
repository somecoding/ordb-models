<?php


namespace OrdbModels\Unit;


class FluidOunce extends Unit
{
   protected string $conversionFactor = '28'; //0,028 Liter
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'fl. oz.';

}