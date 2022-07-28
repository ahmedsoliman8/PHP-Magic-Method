<?php
class SomeClass{

  public  $name="Ahmed";
   public function __get($name)
    {
        // TODO: Implement __get() method.
    }
}

$class=new SomeClass();

var_dump($class->name);