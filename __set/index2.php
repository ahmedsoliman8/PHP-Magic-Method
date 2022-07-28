<?php

class  User
{

    protected $data = [
        'email' => 'ahmed@gmail.com'
    ];

    public function set($key,$value)
    {
        $this->data[$key] = $value;
    }
}

$user = new User();

$user->set('email','ali@gmail.com');

var_dump($user);
