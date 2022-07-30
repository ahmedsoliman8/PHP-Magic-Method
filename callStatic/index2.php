<?php

class Auth
{

    public static function attempt($username, $password)
    {
        var_dump('attempt');
    }

}


Auth::attempt('ahmed@gmail.com', 'password');