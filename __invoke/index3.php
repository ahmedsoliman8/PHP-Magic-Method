<?php

class HomeController{
    public function __invoke()
    {
        return 'Home View';
    }
}

$controller=new HomeController();
var_dump($controller());