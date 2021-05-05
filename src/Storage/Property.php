<?php


namespace OrdbModels\Storage;


class Property
{
    public ?int $id;
    /**
     * @var Product[]
     */
    public array $itemDefinitions;

    public ?PropertyKey $key;
    public ?string $value;

}