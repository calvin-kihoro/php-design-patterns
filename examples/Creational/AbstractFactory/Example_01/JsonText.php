<?php 
namespace Patterns\Creational\AbstractFactory\Example_01;

use Patterns\Creational\AbstractFactory\Example_01\Text;
use Exception;

class JsonText extends Text 
{
    public function getContent()
    {
        return $this->content;
    }

    public function toJson()
    {
        if (!is_array($this->content)) {
            throw new Exception("Content must be of type Array");
        }

        return json_encode($this->content);
    }
}