<?php


namespace App\classes;


class Services
{
    public $services=[],$id ;
    public function __construct()
    {

        $this->services=[
            0=>[
                'sName'=>'Portfolio',
                'sid'=>'1',
                'sdescription'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque 
cupiditate facilis, ipsam numquam omnis quibusdam sequi sunt suscipit. Facilis.',
            ],
            1=>[
                'sName'=>'Business',
                'sid'=>'2',
                'sdescription'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque 
cupiditate facilis, ipsam numquam omnis quibusdam sequi sunt suscipit. Facilis.',
            ],
            2=>[
                'sName'=>'Company',
                'sid'=>'3',
                'sdescription'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque 
cupiditate facilis, ipsam numquam omnis quibusdam sequi sunt suscipit. Facilis.',
            ],
            3=>[
                'sName'=>'sports',
                'sid'=>'4',
                'sdescription'=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci cumque 
cupiditate facilis, ipsam numquam omnis quibusdam sequi sunt suscipit. Facilis.',
            ],
        ];
    }

    public function allService(){
        return $this->services;
}
public function getServiceByID($post){

}

}