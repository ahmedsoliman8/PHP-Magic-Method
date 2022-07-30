<?php

class  SomeClass{

    public function __destruct()
    {
        // TODO: Implement __destruct() method.

        var_dump('destruct');
    }
}

$class=new SomeClass();

