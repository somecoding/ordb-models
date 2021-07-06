<?php


namespace OrdbModels\Unit;


class Deziliter extends Unit
{
   protected string $conversionFactor = '100';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'dl';
}