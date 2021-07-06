<?php


namespace OrdbModels\Unit;


use Brick\Math\BigDecimal;
use Brick\Math\BigRational;

class Tropfen extends Unit
{
    protected string $conversionFactor = '1/15';
    protected string $referenceUnitClass = Mililiter::class;
    protected string $shortCode = 'Tr';

    public function getConversionFactorForConversion(): BigRational
    {
        $e = BigRational::of($this->conversionFactor);
        return $e;
    }
}