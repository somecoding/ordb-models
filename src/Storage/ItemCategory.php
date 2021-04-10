<?php


namespace OrdbModels\Storage;

/**
 * A Category to specifiy and group items by
 * Class ItemCategory
 * @package OrdbModels\Storage
 */
class ItemCategory
{
    protected int $id;

    /**
     * @example 'Camera'
     * @var string
     */
    protected string $name;

    /**
     * @example A parent ItemCategory f.e. with name 'Electronic Devices'
     * @var ItemCategory|null
     */
    protected ?ItemCategory $parentCategory;

    /**
     * @example Child Categories f.e. 'Video Camera' and 'Photo Camera'
     * @var null|ItemCategory[]
     */
    protected ?array $childCategories;
    /**
     * @var ItemDefinition[]
     */
    protected array $itemDefinitions;
}