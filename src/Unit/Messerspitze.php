<?php


namespace OrdbModels\Unit;


class Messerspitze extends Unit
{//1-3
    protected int $conversionFactor = 2;
    protected string $referenceUnitClass = Prise::class;
    protected string $shortCode = 'Msp';

}