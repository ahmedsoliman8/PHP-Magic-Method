<?php

class User
{
    protected $data = [
        'email' => 'ahmed@gmail.com',
        'name' => 'Ahmed Mahmoud'
    ];

    public function __toString()
    {
        return $this->toJson();
    }

    public function toJson()
    {
        return json_encode($this->data);
    }

}

$user = new User();

echo $user->toJson();