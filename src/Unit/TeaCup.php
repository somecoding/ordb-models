<?php


namespace OrdbModels\Unit;


class TeaCup extends Unit
{
   protected string $conversionFactor = '190';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'tc';

}