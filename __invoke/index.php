<?php

class someClass{
    public function __invoke()
    {
        var_dump('invoked');
    }
}

$class=new someClass();

