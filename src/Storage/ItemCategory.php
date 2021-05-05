<?php


namespace OrdbModels\Storage;

/**
 * A Category to specifiy and group items by
 * Class ItemCategory
 * @package OrdbModels\Storage
 */
class ItemCategory
{
    public ?int $id = null;

    /**
     * @example 'Camera'
     * @var string
     */
    public string $name = '';

    /**
     * @example A parent ItemCategory f.e. with name 'Electronic Devices'
     * @var ItemCategory|null
     */
    public ?ItemCategory $parentCategory = null;

    /**
     * @example Child Categories f.e. 'Video Camera' and 'Photo Camera'
     * @var null|ItemCategory[]
     */
    public array $childCategories = [];
    /**
     * @var Product[]
     */
    public array $itemDefinitions = [];
}