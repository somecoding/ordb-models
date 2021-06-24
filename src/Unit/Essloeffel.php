<?php


namespace OrdbModels\Unit;


class Essloeffel extends Unit
{
    protected float $conversionFactor = 15;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'EL';

}