<?php


namespace OrdbModels\Storage;


class PropertyKey
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

}