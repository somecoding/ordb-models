<?php


namespace OrdbModels\Unit;


class FluidOunceUS extends FluidOunce
{
    protected string $conversionFactor = '28.4'; //0,0284 Liter
    protected string $shortCode = 'fl.oz.';
}