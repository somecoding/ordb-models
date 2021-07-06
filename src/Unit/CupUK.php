<?php


namespace OrdbModels\Unit;


class CupUK extends Unit
{
   protected string $conversionFactor = '250';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'c';

}