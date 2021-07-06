<?php


namespace OrdbModels\Unit;


class Grain extends Unit
{
    protected string $conversionFactor = '0.065';
    protected string $referenceUnitClass = Gramm::class;
    protected string $shortCode = 'gr';

}