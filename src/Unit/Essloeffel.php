<?php


namespace OrdbModels\Unit;


class Essloeffel extends Unit
{
    protected int $conversionFactor = 1/15;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'EL';

}