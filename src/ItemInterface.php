<?php


namespace OrdbModels;


interface ItemInterface
{

    public function getDefinition(): DefinitionInterface;
    public function setDefinition(DefinitionInterface $definition): ItemInterface;

}