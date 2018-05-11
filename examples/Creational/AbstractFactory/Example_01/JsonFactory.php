<?php 
namespace Patterns\Creational\AbstractFactory\Example_01;

use Patterns\Creational\AbstractFactory\Example_01\AbstractFactory;

class JsonFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new JsonText($content);
    }

}