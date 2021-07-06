<?php


namespace OrdbModels\Unit;


class Teeloeffel extends Unit
{
   protected string $conversionFactor = '5';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'TL';

}