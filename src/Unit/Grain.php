<?php


namespace OrdbModels\Unit;


class Grain extends Unit
{
    protected int $conversionFactor = 65/1000;
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'gr';

}