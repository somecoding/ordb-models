<?php


namespace OrdbModels\Unit;


class Indisdinct extends Unit
{
    protected int $conversionFactor = 1;
    protected string $referenceUnitClass = Indisdinct::class;
    protected string $shortCode = '';
}