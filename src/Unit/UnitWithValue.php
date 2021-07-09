<?php


namespace OrdbModels\Unit;


use Brick\Math\BigInteger;
use Brick\Math\BigDecimal;
use Brick\Math\BigNumber;
use Brick\Math\Exception\RoundingNecessaryException;
use Brick\Math\RoundingMode;

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

        try {
            $value = $unitWithValue->count->multipliedBy($factor);
        }catch (RoundingNecessaryException $roundingNecessaryException){
            $factor->toScale(1, RoundingMode::HALF_CEILING)->toBigDecimal();

            $factor->toScale(1000, RoundingMode::HALF_CEILING)->toBigDecimal();
            $unitWithValue->count->toScale(1000, RoundingMode::HALF_CEILING);

            $value = $factor->multipliedBy($unitWithValue->count);

        }

        $unit = new UnitWithValue($value, $unitClass);
        if ($unit->unit->getConversionFactorForConversion()->isEqualTo($one) && get_class($unit->unit) === $unit->unit->getReferenceUnitClass()) {
            return $unit;
        }



        return self::convertToBaseUnit($unit);
    }


}