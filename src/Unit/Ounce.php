<?php


namespace OrdbModels\Unit;


class Ounce extends Unit
{
    protected string $conversionFactor = '28.35';
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'oz.';

}