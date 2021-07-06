<?php


namespace OrdbModels\Unit;


class Pfund extends Unit
{
   protected string $conversionFactor = '500';
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'pfd';
}