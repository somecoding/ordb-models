<?php


namespace OrdbModels\Unit;


class Prise extends Unit
{
    protected string $conversionFactor = '0.04';
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'Pr';

}