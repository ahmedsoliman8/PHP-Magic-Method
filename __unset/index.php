<?php

class User
{

    protected $data = [];

    public function __set($key, $value)
    {
        $this->data[$key] = $value;
    }

    public function __isset($key)
    {
        return isset($this->data[$key]);
    }

    public function __unset($key)
    {
        unset($this->data[$key]);
    }
}

$user = new User();

$user->name = 'Ahmed';
var_dump($user);
unset($user->name);
var_dump($user);



