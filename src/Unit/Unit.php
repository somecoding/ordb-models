<?php


namespace OrdbModels\Unit;


use Brick\Math\BigDecimal;
use Brick\Math\BigNumber;

abstract class Unit implements UnitInterface
{
    protected string $referenceUnitClass;
    protected string $conversionFactor;
    protected string $shortCode;

    public function getReferenceUnitClass(): string
    {
        return $this->referenceUnitClass;
    }

    public function getConversionFactorForConversion(): BigNumber
    {

        return BigDecimal::of($this->conversionFactor);
    }

    public function getShortCode(): string
    {
        return $this->shortCode;
    }


}