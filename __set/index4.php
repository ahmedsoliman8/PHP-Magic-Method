<?php

class  User
{

    protected $data = [];

    public function __construct($data)
    {
        foreach ($data as $key=>$value){
            $this->{$key}=$value;
        }
    }

    public function __set($name, $value)
    {
        $this->data[$name] = $value;
    }
}

$user = new User(['email'=>'ahmed@gmail.com','name'=>'ahmed']);

var_dump($user);
$user->email='ali@gmail.com';

var_dump($user);
