<?php


namespace OrdbModels\Unit;


class Teeloeffel extends Unit
{
    protected int $conversionFactor = 5;
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'TL';

}