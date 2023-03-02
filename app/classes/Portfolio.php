<?php


namespace App\classes;


class Portfolio
{
    public $biodata=[],$education=[],$courses=[];
    public function __construct()
    {
        $this->biodata=[
            "name"=>'Shafin Ahamed',
            'image'=>'shafin.png',
            "address"=>'53,West Razabazar,dhaka-1215',
            "mobile"=>"01736422188",
            "gender"=>"Male",
            "religion"=>"Islam",
            "dateofbirth"=>"31-10-2000",
            "email"=>"shafinahamed@gmail.com",
            "facebook"=>"facebook.com/shafinahamed",
            "twitter"=>"twitter.com/shafinahamed0751",
            "linkedin"=>"linkedin.com/shafinahamed",
            "hobby"=>"Designing and coding",
            "description"=>"Lorem ipsum deius enim eos expedita facilis harum impedit incidunt ipsam labore magni minus nisi nostrum odit pariatur",

        ];
        $this->courses=[
            0=>[
                "course_name"=>"Web Development Bootcamp 2022",
                "course_duration"=>'3 months',
                "course_institute"=>'NewYork Brew',
                "image"=>"bootcamp.png"
            ],
            1=>[
                "course_name"=>"Web Development By Jhankar Mahbub",
                "course_duration"=>'4 Months',
                "course_institute"=>'Jhankar Mahbub',
                "image"=>"maxresdefault.jpg"
            ],
            2=>[
                "course_name"=>"PHP with Laravel By BASIS SEIP",
                "course_duration"=>'3 months',
                "course_institute"=>'BASIS',
                "image"=>"download.png"
            ],
        ];

        $this->education=[
            0=>[
                "exam-name"=>"JSC",
                "institute"=>"Jessore Zilla School, Jessore",
                "passing-year"=>"2013",
                "result"=>5.00
            ],
            1=>[
                "exam-name"=>"SSC",
                "institute"=>"Jessore Zilla School, Jessore",
                "passing-year"=>'2016',
                "result"=>5.00
            ],
            2=>[
                "exam-name"=>"HSC",
                "institute"=>"Govt. M M College, Jessore",
                "passing-year"=>"2018",
                "result"=>4.25
            ],
            3=>[
                "exam-name"=>"BSc",
                "institute"=>"Daffodil International University",
                "passing-year"=>"2023",
                "result"=>3.58
            ],
        ];
    }
    public function allBiodata(){
        return $this->biodata;
    }
    public function allEducation(){
        return $this->education;
    }
    public function allCourses(){
        return $this->courses;
    }
}