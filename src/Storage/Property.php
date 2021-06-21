<?php


namespace OrdbModels\Storage;


class Property
{

    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     */
    public ?int $id = null;
    /**
     * @var Product[]
     */
    public array $itemDefinitions = [];

    public ?PropertyKey $key = null;

    /**
     * @ORM\Column
     */
    public ?string $value = null;

}