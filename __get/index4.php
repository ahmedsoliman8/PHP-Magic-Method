<?php

class User
{

    protected $data = [
        'first_name' => 'ahmed',
        'last_name' => 'mahmoud'
    ];

    public function __get($name)
    {
        if (method_exists($this,$method='get'.ucfirst($name).'Attribute')){

            return  $this->{$method}();
        }
        return $this->data[$name] ?? null;
    }

    public function getFullNameAttribute()
    {
        return trim($this->first_name . ' ' . $this->last_name);
    }
}

$user = new User();

var_dump($user->fullName);