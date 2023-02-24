<?php


namespace App\classes;


class Client
{
    public $clint=[];

    public function __construct()
    {
        $this->clint=[
            0=>[
                'img'=>'client-1.png',
                'name'=>'Adidas Group',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores consectetur delectus laboriosam, molestiae neque, 
                nesciunt officiis quibusdam quis sit, suscipit ullam? Asperiores consequatur est expedita pariatur, quo reprehenderit unde?',
            ],
            1=>[
                'img'=>'client-2.png',
                'name'=>'Bashundhara Group',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores consectetur delectus laboriosam, molestiae neque, 
                nesciunt officiis quibusdam quis sit, suscipit ullam? Asperiores consequatur est expedita pariatur, quo reprehenderit unde?',
            ],
            2=>[
                'img'=>'client-3.png',
                'name'=>'Nike Group',
                'desc'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid asperiores consectetur delectus laboriosam, molestiae neque, 
                nesciunt officiis quibusdam quis sit, suscipit ullam? Asperiores consequatur est expedita pariatur, quo reprehenderit unde?',
            ],
        ];

    }
    public function clientReview(){
        return $this->clint;
    }

}