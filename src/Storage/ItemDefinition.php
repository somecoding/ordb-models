<?php


namespace OrdbModels\Storage;


use OrdbModels\DefinitionInterface;

/**
 * The definition of an item f.e. 'Canon EOS 750D'
 * Class ItemDefinition
 * @package OrdbModels\Storage
 */
class ItemDefinition implements DefinitionInterface
{

    protected int $id;

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

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     * @return ItemDefinition
     */
    public function setId(int $id): ItemDefinition
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return string
     */
    public function getDescription(): string
    {
        return $this->description;
    }

    /**
     * @param string $description
     * @return ItemDefinition
     */
    public function setDescription(string $description): ItemDefinition
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
     * @return ItemDefinition
     */
    public function setName(string $name): ItemDefinition
    {
        $this->name = $name;
        return $this;
    }

    /**
     * @return Property[]
     */
    public function getProperties(): array
    {
        return $this->properties;
    }

    /**
     * @param Property[] $properties
     * @return ItemDefinition
     */
    public function setProperties(array $properties): ItemDefinition
    {
        $this->properties = $properties;
        return $this;
    }

    /**
     * @return Item[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param Item[] $items
     * @return ItemDefinition
     */
    public function setItems(array $items): ItemDefinition
    {
        $this->items = $items;
        return $this;
    }

    /**
     * @return ItemCategory[]
     */
    public function getItemCategories(): array
    {
        return $this->itemCategories;
    }

    /**
     * @param ItemCategory[] $itemCategories
     * @return ItemDefinition
     */
    public function setItemCategories(array $itemCategories): ItemDefinition
    {
        $this->itemCategories = $itemCategories;
        return $this;
    }



}