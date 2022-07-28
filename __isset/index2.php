<?php

class someClass{
    protected  $name="Ahmed";
    public function __isset($name)
    {
        return property_exists($this,$name);
    }
}

$class=new someClass();

var_dump(isset($class->name));