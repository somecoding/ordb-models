<?php

namespace OrdbModelsTest\Unit;

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
    public function testConvertToBaseUnit($inputValue, $inputClass, $outputValue, $outputClass)
    {
        $newUnitWithValue = new UnitWithValue($inputValue, $inputClass);
        $baseUnit         = UnitWithValue::convertToBaseUnit($newUnitWithValue);

        $this->assertEquals($outputValue, $baseUnit->count);
        $this->assertInstanceOf($outputClass, $baseUnit->unit);
    }


    public function dataProvider(): iterable
    {
        yield Bund::class => [1, Bund::class, 1, Bund::class];
        yield Centiliter::class => [1, Centiliter::class, 10, Mililiter::class];
        yield CupUK::class => [1, CupUK::class, 250, Mililiter::class];
        yield CupUS::class => [1, CupUS::class, 238, Mililiter::class];
        yield Dekagramm::class => [25, Dekagramm::class, 250, Gramm::class];
        yield Deziliter::class => [10, Deziliter::class, 1000, Mililiter::class];
        yield Essloeffel::class => [1, Essloeffel::class, 15, Mililiter::class];
        yield FluidOunce::class => [1, FluidOunce::class, 28, Mililiter::class];
        yield FluidOunceUS::class => [1, FluidOunceUS::class, 28.4, Mililiter::class];
        yield Gallon::class => [1, Gallon::class, 3800, Mililiter::class];
        yield Grain::class => [100, Grain::class, 6.5, Gramm::class];
        yield Gramm::class => [1, Gramm::class, 1, Gramm::class];
        yield Indisdinct::class => [1, Indisdinct::class, 1, Indisdinct::class];
        yield Kilogramm::class => [1, Kilogramm::class, 1000, Gramm::class];
        yield Kubikmeter::class => [1, Kubikmeter::class, 1000000, Mililiter::class];
        yield Liter::class => [1, Liter::class, 1000, Mililiter::class];
        yield Messerspitze::class => [2, Messerspitze::class, 0.16, Gramm::class];
        yield Mililiter::class => [1, Mililiter::class, 1, Mililiter::class];
        yield Milligramm::class => [1, Milligramm::class, 10, Gramm::class];
        yield Ounce::class => [1, Ounce::class, 28.35, Gramm::class];
        yield Pfund::class => [1, Pfund::class, 500, Gramm::class];
        yield Pint::class => [2, Pint::class, 2*470, Mililiter::class];
        yield Pound::class => [1, Pound::class, 454, Gramm::class];
        yield Prise::class => [1, Prise::class, 0.04, Gramm::class];
        yield Quart::class => [1, Quart::class, 950, Mililiter::class];
        yield SaltSpoont::class => [1, SaltSpoont::class, 1, Mililiter::class];
        yield Schuss::class => [1, Schuss::class, 10, Mililiter::class];
        yield Spritzer::class => [30, Spritzer::class, 8, Mililiter::class];
        yield Tablespoon::class => [1, Tablespoon::class, 15, Mililiter::class];
        yield Tasse::class => [1, Tasse::class, 200, Mililiter::class];
        yield TeaCup::class => [1, TeaCup::class, 190, Mililiter::class];
        yield Teaspoon::class => [1, Teaspoon::class, 5, Mililiter::class];
        yield Teeloeffel::class => [1, Teeloeffel::class, 5, Mililiter::class];
        yield Tropfen::class => [15, Tropfen::class, 1, Mililiter::class];
    }
}
