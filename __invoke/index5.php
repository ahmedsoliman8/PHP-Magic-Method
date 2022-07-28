<?php

class someClass
{
    public function __invoke($value)
    {
        var_dump($value);
    }
}

$class = new someClass();

$class('ahmed');