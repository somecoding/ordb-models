<?php


namespace OrdbModels\Unit;


class Pound extends Unit
{
    protected int $conversionFactor = 454;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'lb.';

}