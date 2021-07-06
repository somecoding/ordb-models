<?php


namespace OrdbModels\Unit;


class Gramm extends Unit
{
   protected string $conversionFactor = '1';
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'g';
}