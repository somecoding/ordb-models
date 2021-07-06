<?php


namespace OrdbModels\Unit;


use Brick\Math\BigInteger;
use Brick\Math\BigDecimal;
use Brick\Math\BigNumber;

class UnitWithValue
{
    public BigNumber $count;
    public UnitInterface $unit;

    public function __construct(BigNumber $count, string $unitClass)
    {
        $this->count = $count;
        $this->unit  = new $unitClass;
    }

    static public function convertToBaseUnit(UnitWithValue $unitWithValue): UnitWithValue
    {
        $one = BigDecimal::of('1');
        $unitClass = $unitWithValue->unit->getReferenceUnitClass();
        $factor    = $unitWithValue->unit->getConversionFactorForConversion();

        if ($unitWithValue->unit->getConversionFactorForConversion()->isEqualTo($one) && get_class($unitWithValue->unit) === $unitWithValue->unit->getReferenceUnitClass()) {
            return $unitWithValue;
        }

        $value = $unitWithValue->count->multipliedBy($factor);
        $unit = new UnitWithValue($value, $unitClass);

        if ($unit->unit->getConversionFactorForConversion()->isEqualTo($one) && get_class($unit->unit) === $unit->unit->getReferenceUnitClass()) {
            return $unit;
        }



        return self::convertToBaseUnit($unit);
    }


}