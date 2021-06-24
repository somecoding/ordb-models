<?php


namespace OrdbModels\Unit;


class Dekagramm extends Unit
{
    protected float $conversionFactor = 10;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'dag';
}