<?php

class  User{

    protected  $someOther='Ahmed';

    protected $data=[
        'email'=>'ahmed@gmail.com'
    ];

   /* public function __debugInfo()
    {
        return get_object_vars($this);
    }*/
}

$user=new User();

var_dump($user);