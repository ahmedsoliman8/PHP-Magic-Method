<?php


class AuthService
{

    public function attempt($username, $password)
    {
        var_dump('attempt',$username,$password);
    }

}


class Auth
{

    public static function service()
    {
        return new AuthService();
    }

    public static function __callStatic($method, $arguments)
    {
        return self::service()->{$method}(...$arguments);
    }
}


Auth::attempt('ahmed@gmail.com', 'password');