<?php

class someClass{
    public function __invoke()
    {
        var_dump('invoked');
    }
}

$class=new someClass();
$class();
//var_dump(is_callable($class));