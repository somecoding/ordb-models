<?php


namespace OrdbModels\Unit;


class SaltSpoont extends Unit
{
    protected float $conversionFactor = 1;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'ssp.';

}