<?php
class User{

    protected $data=[
        'email'=>'ahmed@gmail.com'
    ];
    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }
}

$user=new User();

var_dump($user->email);