<?php


namespace OrdbModels\Storage;


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
    public array $childStorage = [];

    /**
     * @var Item[];
     */
    public array $storedItems = [];

    public bool $hasCooling = false;
    public bool $hasFreezing = false;

}