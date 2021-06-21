<?php


namespace OrdbModels\Unit;


class Mililiter extends Unit
{
    protected string $referenceUnitClass = Mililiter::class;
    protected int $conversionFactor = 1;
    protected string $shortCode = 'ml';

}