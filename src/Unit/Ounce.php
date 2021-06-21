<?php


namespace OrdbModels\Unit;


class Ounce extends Unit
{
    protected int $conversionFactor = 2835/100;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'oz.';

}