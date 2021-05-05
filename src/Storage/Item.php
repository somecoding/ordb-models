<?php


namespace OrdbModels\Storage;


use OrdbModels\DefinitionInterface;
use OrdbModels\ItemInterface;

/**
 * The actual item of a Product(definition) f.e. 'camera with unique serial no ABCDE123'
 * Class Item
 * @package OrdbModels\Storage
 */
class Item implements ItemInterface
{

    public ?int $id = null;

    public string $uniqueIdentifierCode = '';

    public ?Product $definition = null;

    public ?Storage $storage = null;

    /**
     * @var string[]
     */
    public array $notes = [];

    public function getDefinition(): DefinitionInterface
    {
        return $this->definition;
    }

    public function setDefinition(DefinitionInterface $definition): ItemInterface
    {
        $this->definition = $definition;
        return $this;
    }


}