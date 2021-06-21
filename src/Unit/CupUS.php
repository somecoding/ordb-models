<?php


namespace OrdbModels\Unit;


class CupUS extends Unit
{
    protected int $conversionFactor = 238;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'c';
}