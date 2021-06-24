<?php


namespace OrdbModels\Unit;


class UnitWithValue
{
    public float $count;
    public UnitInterface $unit;

    public function __construct(float $count, string $unitClass)
    {
        $this->count = $count;
        $this->unit  = new $unitClass;
    }

    static public function convertToBaseUnit(UnitWithValue $unitWithValue): UnitWithValue
    {
        $unitClass = $unitWithValue->unit->getReferenceUnitClass();
        $factor    = $unitWithValue->unit->getConversionFactorForConversion();
        if ($factor == 1) {
            return $unitWithValue;
        }


        $unit = new UnitWithValue($unitWithValue->count * $factor, $unitClass);

        if ($unit->unit->getConversionFactorForConversion() == 1) {
            return $unit;
        } else {
            return self::convertToBaseUnit($unit);
        }
    }


}