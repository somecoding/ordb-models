<?php


namespace OrdbModels\Unit;


class Pfund extends Unit
{
    protected int $conversionFactor = 1/500;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'pfd';
}