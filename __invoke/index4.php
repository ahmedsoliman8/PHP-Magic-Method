<?php

class Add{
    protected $to;
    protected  $value;
    public function __construct($to,$value)
    {
        $this->to=$to;
        $this->value=$value;
    }

    public function __invoke()
    {
        return $this->result();
    }

    public  function result(){
        return $this->to + $this->value;
    }
}
$add=new Add(7,8);

var_dump($add());