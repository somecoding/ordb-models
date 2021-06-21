<?php


namespace OrdbModels\Unit;


class CupUK extends Unit
{
    protected int $conversionFactor = 250;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'c';

}