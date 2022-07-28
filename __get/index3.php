<?php

class User
{

    protected $data = [
        'first_name' => 'ahmed',
        'last_name' => 'mahmoud'
    ];

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

    public function fullName()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }
}

$user = new User();

var_dump($user->fullName());