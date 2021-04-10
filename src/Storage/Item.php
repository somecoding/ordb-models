<?php


namespace OrdbModels\Storage;



use OrdbModels\ItemInterface;

/**
 * The actual item of a ItemDefinition f.e. 'camera with unique serial no ABCDE123'
 * Class Item
 * @package OrdbModels\Storage
 */
class Item implements ItemInterface
{

    protected int $id;

    protected string $uniqueIdentifierCode;

    protected ItemDefinition $definition;

    protected Storage $storage;

    /**
     * @return ItemDefinition
     */
    public function getDefinition(): ItemDefinition
    {
        return $this->definition;
    }

    /**
     * @param ItemDefinition $definition
     * @return Item
     */
    public function setDefinition(ItemDefinition $definition): Item
    {
        $this->definition = $definition;
        return $this;
    }

    /**
     * @return Storage
     */
    public function getStorage(): Storage
    {
        return $this->storage;
    }

    /**
     * @param Storage $storage
     * @return Item
     */
    public function setStorage(Storage $storage): Item
    {
        $this->storage = $storage;
        return $this;
    }




}