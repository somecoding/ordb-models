<?php


namespace OrdbModels\Unit;


abstract class Unit implements UnitInterface
{
    protected string $referenceUnitClass;
    protected int $conversionFactor;
    protected string $shortCode;

    public function getReferenceUnitClass(): string
    {
        return $this->referenceUnitClass;
    }

    public function getConversionFactorForConversion():int
    {
        return $this->conversionFactor;
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }


}