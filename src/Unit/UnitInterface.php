<?php


namespace OrdbModels\Unit;


use Brick\Math\BigDecimal;
use Brick\Math\BigNumber;

interface UnitInterface
{
    public function getConversionFactorForConversion(): BigNumber;

    public function getReferenceUnitClass(): string;

    public function getShortCode(): string;

}