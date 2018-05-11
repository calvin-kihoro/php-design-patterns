<?php 
namespace Patterns\Creational\AbstractFactory\Example_01;

abstract class Text 
{
    protected $content;

    public function __construct($content)
    {
        $this->content = $content;
    }

    abstract public function getContent();
    
}