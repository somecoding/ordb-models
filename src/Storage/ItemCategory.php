<?php


namespace OrdbModels\Storage;

use OrdbModels\Ingredient\IngredientAmount;
use OrdbModels\TypeAttribute;

/**
 * A Category to specifiy and group items by
 * Class ItemCategory
 * @package OrdbModels\Storage
 */
class ItemCategory
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public ?int $id = null;

    /**
     * @example 'Camera'
     * @var string
     * @ORM\Column
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
    #[TypeAttribute(ItemCategory::class)]
    public array $childCategories = [];
    /**
     * @var Product[]
     */
    #[TypeAttribute(Product::class)]
    public array $itemDefinitions = [];
}