<?php 
namespace Patterns\Creational\AbstractFactory\Example_01;

use Patterns\Creational\AbstractFactory\Example_01\Text;

class HtmlText extends Text 
{
    public function getContent()
    {
        return $this->content;
    }
}