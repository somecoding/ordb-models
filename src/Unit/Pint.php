<?php


namespace OrdbModels\Unit;


class Pint extends Unit
{
   protected string $conversionFactor = '470';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'pt.';
}