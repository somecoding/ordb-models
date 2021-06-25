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

        if ($unitWithValue->unit->getConversionFactorForConversion() == 1 && get_class($unitWithValue->unit) === $unitWithValue->unit->getReferenceUnitClass()) {
            return $unitWithValue;
        }
        $value = round($unitWithValue->count * $factor,4);
        $unit = new UnitWithValue($value, $unitClass);

        if ($unit->unit->getConversionFactorForConversion() == 1 && get_class($unit->unit) === $unit->unit->getReferenceUnitClass()) {
            return $unit;
        }



        return self::convertToBaseUnit($unit);
    }


}