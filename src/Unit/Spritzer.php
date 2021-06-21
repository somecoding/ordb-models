<?php


namespace OrdbModels\Unit;


class Spritzer extends Unit
{
    protected int $conversionFactor = 4;
    protected string $referenceUnitClass = Tropfen::class;
    protected string $shortCode = 'Tr';
}