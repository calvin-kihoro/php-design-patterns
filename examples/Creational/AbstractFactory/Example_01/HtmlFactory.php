<?php 
namespace Patterns\Creational\AbstractFactory\Example_01;

use Patterns\Creational\AbstractFactory\Example_01\AbstractFactory;
use Patterns\Creational\AbstractFactory\Example_01\HtmlText;

class HtmlFactory extends AbstractFactory
{
    public function createText($content)
    {
        return new HtmlText($content);
    }
}