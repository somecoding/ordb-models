<?php


namespace OrdbModels\Storage;


class Storage
{

    protected int $id;

    protected string $name;
    protected string $description;


    protected ?Storage $parentStorage;
    /**
     * @var Storage[]
     */
    protected array $childStorage;

    /**
     * @var Item[];
     */
    protected array $storedItems;

    /**
     * @var StorageCondition[]
     */
    protected array $storageConditions;

}