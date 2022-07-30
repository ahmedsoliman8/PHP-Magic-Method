<?php

class InputField
{

    public function __toString()
    {
        return '
         <input type="' . $this->attributes['type'] . '" name="' . $this->attributes['name'] . '" >
       ';
    }
}

class TextField extends InputField
{
    protected $attributes = [];


    public function setType($type)
    {
        $this->attributes['type'] = $type;
    }

    public function setName($name)
    {
        $this->attributes['name'] = $name;
    }
}

$userName = new TextField();
$userName->setType('text');
$userName->setName('username');

echo $userName;

