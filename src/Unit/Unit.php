<?php


namespace OrdbModels\Unit;


abstract class Unit implements UnitInterface
{
    protected string $referenceUnitClass;
    protected float $conversionFactor;
    protected string $shortCode;

    public function getReferenceUnitClass(): string
    {
        return $this->referenceUnitClass;
    }

    public function getConversionFactorForConversion():float
    {
        return $this->conversionFactor;
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }




}