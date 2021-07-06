<?php


namespace OrdbModels\Unit;


class CupUS extends Unit
{
   protected string $conversionFactor = '238';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'c';
}