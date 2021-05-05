<?php


namespace OrdbModels\Storage;


class Storage
{

    public ?int $id = null;

    public string $name = '';
    public string $description = '';


    public ?Storage $parentStorage = null;
    /**
     * @var Storage[]
     */
    public array $childStorage = [];

    /**
     * @var Item[];
     */
    public array $storedItems = [];

    public bool $hasCooling = false;
    public bool $hasFreezing = false;

}