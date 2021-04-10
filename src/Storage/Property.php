<?php


namespace OrdbModels\Storage;


class Property
{
 protected int $id;
    /**
     * @var ItemDefinition[]
     */
 protected array $itemDefinitions;

 protected PropertyKey $key;
 protected string $value;

}