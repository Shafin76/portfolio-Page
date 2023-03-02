<?php


namespace App\classes;


class Project
{
    public $projects=[];
    public function __construct()
    {
        $this->projects=[
            0=>[
                "name"=>'Portfolio WebSite',
                "image"=>'project1.png',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci debitis excepturi iusto nemo nihil quam ratione sed unde voluptates?'
            ],
            1=>[
                "name"=>'Transport WebSite',
                "image"=>'project2.jpg',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci debitis excepturi iusto nemo nihil quam ratione sed unde voluptates?'
            ],
            2=>[
                "name"=>'Currier WebSite',
                "image"=>'project3.jpg',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci debitis excepturi iusto nemo nihil quam ratione sed unde voluptates?'
            ],
            3=>[
                "name"=>'Architect WebSite',
                "image"=>'project4.jpg',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci debitis excepturi iusto nemo nihil quam ratione sed unde voluptates?'
            ],
            4=>[
                "name"=>'Responsive Web Page',
                "image"=>'project5.jpg',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci debitis excepturi iusto nemo nihil quam ratione sed unde voluptates?'
            ],
            5=>[
                "name"=>'Laravel Project',
                "image"=>'project6.jpg',
                "description"=>'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusantium adipisci debitis excepturi iusto nemo nihil quam ratione sed unde voluptates?'
            ]
        ];
    }
    public function allProject(){
        return $this->projects;
    }


}