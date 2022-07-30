<?php

class Address
{
    public $line;

    public function __construct($line)
    {
        $this->line = $line;
    }
}

class  User
{
    protected $address;

    public function __construct(Address $address)
    {
        $this->address = $address;
    }
}

$address = new Address('25 street mansoura');
$user = new User($address);

$address->line='A new address';
var_dump($user);