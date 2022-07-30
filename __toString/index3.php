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

class UserController{
    public  function show(){
        $user=new User();
        return $user;
    }
}

$controller = new UserController();

echo $controller->show();