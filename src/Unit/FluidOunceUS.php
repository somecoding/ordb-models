<?php


namespace OrdbModels\Unit;


class FluidOunceUS extends FluidOunce
{
    protected float $conversionFactor = 28.4; //0,0284 Liter
    protected string $shortCode = 'fl.oz.';
}