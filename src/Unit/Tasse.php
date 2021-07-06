<?php


namespace OrdbModels\Unit;


class Tasse extends Unit
{
   protected string $conversionFactor = '200';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'Tas';
}