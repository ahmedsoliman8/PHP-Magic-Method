<?php

class User{


    public $data=[
        'id'=>1,
        'email'=>'ahmed@gmail.com'
    ];

    public function __sleep()
    {
        return ['data'];
    }

    public function __wakeup()
    {
        $this->data=[
            'id'=>1,
            'email'=>'mido@gmail.com'
        ];
    }

}
class SendUserWelcomeEmail{
    protected $user;
    public function __construct(User  $user)
    {
        $this->user=$user;
    }

    public function handle(){
        var_dump('send email to '.$this->user->data['email']);
    }
    public function __sleep()
    {
        return ['user'];
    }
}

$user=new User();
$job=new SendUserWelcomeEmail($user);

$string= base64_encode( serialize($job));

$job=unserialize(base64_decode($string));

$job->handle();