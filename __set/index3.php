<?php

class  User
{

    protected $data = [
        'email' => 'ahmed@gmail.com'
    ];

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$user = new User();

$user->email='ali@gmail.com';

var_dump($user);
