<?php


namespace OrdbModels;


interface DefinitionInterface
{

    public function getDescription(): string;

    public function setDescription(string $description): DefinitionInterface;

    public function getName(): string;

    public function setName(string $name): DefinitionInterface;



}