<?php


namespace OrdbModels\Unit;


interface UnitInterface
{
    public function getConversionFactorForConversion(): int;

    public function getReferenceUnitClass(): string;

    public function getShortCode(): string;

}