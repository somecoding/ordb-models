<?php

namespace OrdbModelsTest\Unit;

use Brick\Math\BigDecimal;
use Brick\Math\BigNumber;
use Brick\Math\BigRational;
use OrdbModels\Unit\Bund;
use OrdbModels\Unit\Centiliter;
use OrdbModels\Unit\CupUK;
use OrdbModels\Unit\CupUS;
use OrdbModels\Unit\Dekagramm;
use OrdbModels\Unit\Deziliter;
use OrdbModels\Unit\Essloeffel;
use OrdbModels\Unit\FluidOunce;
use OrdbModels\Unit\FluidOunceUS;
use OrdbModels\Unit\Gallon;
use OrdbModels\Unit\Grain;
use OrdbModels\Unit\Gramm;
use OrdbModels\Unit\Indisdinct;
use OrdbModels\Unit\Kilogramm;
use OrdbModels\Unit\Kubikmeter;
use OrdbModels\Unit\Liter;
use OrdbModels\Unit\Messerspitze;
use OrdbModels\Unit\Mililiter;
use OrdbModels\Unit\Milligramm;
use OrdbModels\Unit\Ounce;
use OrdbModels\Unit\Pfund;
use OrdbModels\Unit\Pint;
use OrdbModels\Unit\Pound;
use OrdbModels\Unit\Prise;
use OrdbModels\Unit\Quart;
use OrdbModels\Unit\SaltSpoont;
use OrdbModels\Unit\Schuss;
use OrdbModels\Unit\Spritzer;
use OrdbModels\Unit\Tablespoon;
use OrdbModels\Unit\Tasse;
use OrdbModels\Unit\TeaCup;
use OrdbModels\Unit\Teaspoon;
use OrdbModels\Unit\Teeloeffel;
use OrdbModels\Unit\Tropfen;
use OrdbModels\Unit\UnitWithValue;
use PHPUnit\Framework\TestCase;

class UnitConvertingTest extends TestCase
{
    /** @dataProvider dataProvider */
    public function testConvertToBaseUnit(BigNumber $inputValue, $inputClass,BigNumber $outputValue, $outputClass)
    {
        $newUnitWithValue = new UnitWithValue($inputValue, $inputClass);
        $baseUnit         = UnitWithValue::convertToBaseUnit($newUnitWithValue);

       $comp =  $outputValue->compareTo($baseUnit->count);
        $this->assertTrue($outputValue->isEqualTo($baseUnit->count));
        //$this->assertEquals($outputValue, $baseUnit->count);
        $this->assertInstanceOf($outputClass, $baseUnit->unit);
    }


    public function dataProvider(): iterable
    {
        yield Bund::class => [BigDecimal::of('1'), Bund::class, BigDecimal::of('1'), Bund::class];
        yield Centiliter::class => [BigDecimal::of('1'), Centiliter::class, BigDecimal::of('10'), Mililiter::class];
        yield CupUK::class => [BigDecimal::of('1'), CupUK::class, BigDecimal::of('250'), Mililiter::class];
        yield CupUS::class => [BigDecimal::of('1'), CupUS::class, BigDecimal::of('238'), Mililiter::class];
        yield Dekagramm::class => [BigDecimal::of('25'), Dekagramm::class, BigDecimal::of('250'), Gramm::class];
        yield Deziliter::class => [BigDecimal::of('10'), Deziliter::class, BigDecimal::of('1000'), Mililiter::class];
        yield Essloeffel::class => [BigDecimal::of('1'), Essloeffel::class, BigDecimal::of('15'), Mililiter::class];
        yield FluidOunce::class => [BigDecimal::of('1'), FluidOunce::class, BigDecimal::of('28'), Mililiter::class];
        yield FluidOunceUS::class => [BigDecimal::of('1'), FluidOunceUS::class, BigDecimal::of('28.4'), Mililiter::class];
        yield Gallon::class => [BigDecimal::of('1'), Gallon::class, BigDecimal::of('3800'), Mililiter::class];
        yield Grain::class => [BigDecimal::of('1'), Grain::class, BigDecimal::of('0.065'), Gramm::class];
        yield Gramm::class => [BigDecimal::of('1'), Gramm::class, BigDecimal::of('1'), Gramm::class];
        yield Indisdinct::class => [BigDecimal::of('1'), Indisdinct::class, BigDecimal::of('1'), Indisdinct::class];
        yield Kilogramm::class => [BigDecimal::of('1'), Kilogramm::class, BigDecimal::of('1000'), Gramm::class];
        yield Kubikmeter::class => [BigDecimal::of('1'), Kubikmeter::class, BigDecimal::of('1000000'), Mililiter::class];
        yield Liter::class => [BigDecimal::of('1'), Liter::class, BigDecimal::of('1000'), Mililiter::class];
        yield Messerspitze::class => [BigDecimal::of('2'), Messerspitze::class, BigDecimal::of('0.16'), Gramm::class];
        yield Mililiter::class => [BigDecimal::of('1'), Mililiter::class, BigDecimal::of('1'), Mililiter::class];
        yield Milligramm::class => [BigDecimal::of('1'), Milligramm::class, BigDecimal::of('10'), Gramm::class];
        yield Ounce::class => [BigDecimal::of('1'), Ounce::class, BigDecimal::of('28.35'), Gramm::class];
        yield Pfund::class => [BigDecimal::of('1'), Pfund::class, BigDecimal::of('500'), Gramm::class];
        yield Pint::class => [BigDecimal::of('2'), Pint::class, BigDecimal::of('940'), Mililiter::class];
        yield Pound::class => [BigDecimal::of('1'), Pound::class, BigDecimal::of('454'), Gramm::class];
        yield Prise::class => [BigDecimal::of('1'), Prise::class, BigDecimal::of('0.04'), Gramm::class];
        yield Quart::class => [BigDecimal::of('1'), Quart::class, BigDecimal::of('950'), Mililiter::class];
        yield SaltSpoont::class => [BigDecimal::of('1'), SaltSpoont::class, BigDecimal::of('1'), Mililiter::class];
        yield Schuss::class => [BigDecimal::of('1'), Schuss::class, BigDecimal::of('10'), Mililiter::class];
        yield Spritzer::class => [BigDecimal::of('1'), Spritzer::class, BigRational::of('4/15'), Mililiter::class];
        yield Tablespoon::class => [BigDecimal::of('1'), Tablespoon::class, BigDecimal::of('15'), Mililiter::class];
        yield Tasse::class => [BigDecimal::of('1'), Tasse::class, BigDecimal::of('200'), Mililiter::class];
        yield TeaCup::class => [BigDecimal::of('1'), TeaCup::class, BigDecimal::of('190'), Mililiter::class];
        yield Teaspoon::class => [BigDecimal::of('1'), Teaspoon::class, BigDecimal::of('5'), Mililiter::class];
        yield Teeloeffel::class => [BigDecimal::of('1'), Teeloeffel::class, BigDecimal::of('5'), Mililiter::class];
        yield Tropfen::class => [BigDecimal::of('15'), Tropfen::class, BigDecimal::of('1'), Mililiter::class];
    }
}
