<?php


namespace OrdbModels;


class ItemDefinition
{

    protected $id;

    protected string $description;
    protected string $name;

    /**
     * @var Property[]
     */
    protected array $properties;

    /**
     * @var Item[]
     */
    protected array $items;

    /**
     * @var ItemCategory[]
     */
    protected array $itemCategories;

}