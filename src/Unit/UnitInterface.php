<?php


namespace OrdbModels\Unit;


interface UnitInterface
{
    public function getConversionFactorForConversion(): float;

    public function getReferenceUnitClass(): string;

    public function getShortCode(): string;

}