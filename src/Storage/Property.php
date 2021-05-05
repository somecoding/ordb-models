<?php


namespace OrdbModels\Storage;


class Property
{
    public ?int $id = null;
    /**
     * @var Product[]
     */
    public array $itemDefinitions = [];

    public ?PropertyKey $key = null;
    public ?string $value = null;

}