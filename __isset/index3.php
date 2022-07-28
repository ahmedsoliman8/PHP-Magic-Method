<?php

class User{
    protected  $data=[

        'email'=>'ahmed@gmail.com'
    ];

    public function __isset($name)
    {
        return isset($this->data[$name]);
    }
}

$user=new User();

var_dump(isset($user->first_name));