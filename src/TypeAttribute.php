<?php


namespace OrdbModels;

use Attribute;

#[Attribute]
class TypeAttribute
{

    public function __construct(public string $classname)
    {

    }
}