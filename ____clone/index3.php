<?php

class  User{

    public  $email='ahmed@gmail.com';
}

$user=new User();

$oldUser = clone  $user;

$user->email='ahmed2@gmail.com';
var_dump("Email changed from {$oldUser->email} to {$user->email}");