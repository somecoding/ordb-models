<?php


namespace OrdbModels\Unit;


class Liter extends Unit
{
    protected string $referenceUnitClass = Mililiter::class;
   protected string $conversionFactor = '1000';
    protected string $shortCode = 'l';
}