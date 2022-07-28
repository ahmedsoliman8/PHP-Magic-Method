<?php

class User
{

    protected $data = [
        'first_name' => 'ahmed',
        'last_name' => 'mahmoud'
    ];

    public function __get($name)
    {
        return $this->data[$name] ?? null;
    }

}

abstract class Presenter{
    public function __get($key)
    {
        if (method_exists($this, $key)) {

            return $this->{$key}();
        }
        return null;
    }
}

class UserPresenter extends Presenter
{
    protected $user;

    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function fullName()
    {
        return trim($this->user->first_name . ' ' . $this->user->last_name);
    }


}

$user = new User();

$presenter = new UserPresenter($user);

var_dump($presenter->fullName);