<?php


namespace OrdbModels\Unit;


class TeaCup extends Unit
{
    protected int $conversionFactor = 190;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'tc';

}