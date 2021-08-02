<?php


namespace OrdbModels\Storage;


use OrdbModels\TypeAttribute;

class Storage
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
    public string $name = '';

    /**
     * @ORM\Column
     */
    public string $description = '';


    public ?Storage $parentStorage = null;
    /**
     * @var Storage[]
     */
    #[TypeAttribute(Storage::class)]
    public array $childStorage = [];

    /**
     * @var Item[];
     */
    #[TypeAttribute(Item::class)]
    public array $storedItems = [];

    public bool $hasCooling = false;
    public bool $hasFreezing = false;

}