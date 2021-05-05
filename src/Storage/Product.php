<?php


namespace OrdbModels\Storage;


use OrdbModels\DefinitionInterface;

/**
 * The definition of an item f.e. 'Canon EOS 750D'
 * Class ItemDefinition
 * @package OrdbModels\Storage
 */
class Product implements DefinitionInterface
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public ?int $id = null;

    /**
     * @ORM\Column
     */
    public string $description = '';

    /**
     * @ORM\Column
     */
    public string $name = '';

    /**
     * @ORM\Column
     */
    public string $ean = '';

    /**
     * @ORM\Column
     */
    public string $asin = '';

    /**
     * @ORM\Column
     */
    public string $gs1 = '';

    /**
     * @var Property[]
     */
    public array $properties = [];

    /**
     * @var Item[]
     */
    public array $items = [];

    /**
     * @var ItemCategory[]
     */
    public array $itemCategories = [];

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return Product
     */
    public function setDescription(string $description): Product
    {
        $this->description = $description;
        return $this;
    }

    /**
     * @return string
     */
    public function getName(): string
    {
        return $this->name;
    }

    /**
     * @param string $name
     * @return Product
     */
    public function setName(string $name): Product
    {
        $this->name = $name;
        return $this;
    }

}