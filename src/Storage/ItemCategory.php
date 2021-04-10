<?php


namespace OrdbModels;


class ItemCategory
{
    protected int $id;
    protected string $name;
    protected ?ItemCategory $parentCategory;

    /**
     * @var null|ItemCategory[]
     */
    protected ?array $childCategories;
    /**
     * @var ItemDefinition[]
     */
    protected array $itemDefinitions;
}