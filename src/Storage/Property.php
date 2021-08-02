<?php


namespace OrdbModels\Storage;


use OrdbModels\TypeAttribute;

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
    #[TypeAttribute(Product::class)]
    public array $itemDefinitions = [];

    public ?PropertyKey $key = null;

    /**
     * @ORM\Column
     */
    public ?string $value = null;

}