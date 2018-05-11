<?php 
namespace Patterns\Creational\AbstractFactory\Example_01;

abstract class AbstractFactory
{
    abstract public function createText($content);
}