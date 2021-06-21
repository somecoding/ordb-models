<?php


namespace OrdbModels\Unit;


class Tropfen extends Unit
{
    protected int $conversionFactor = 1/20;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'Tr';

}