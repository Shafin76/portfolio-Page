<?php


namespace App\classes;


class Data
{
    public $footerCardTitle=[],$footerCardDescription=[];

    public function __construct()
    {
      $this->footerCardTitle=[

          "About Myself",
          "My Regular Work",
          "Contact Info",
          "Subscribe Here"
      ] ;

        $this->footerCardDescription=[

            'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aut cum labore provident sapiente. Amet, architecto dolore excepturi minus nostrum quae quidem repellat sint. Aliquid dignissimos libero nisi placeat sint, vitae.',
            1=>[
                'Company Web Development',
                'News Portal Web Development',
                'Education Wev Development'
            ],
          2=>[
'House # 420, Road # 03. Green Road, Dhaka 1215',
              '0187*****94',
              'pervej@gmail.com'

          ]

        ];




    }

public function footerCardTitle(){
        return $this->footerCardTitle;
}

public function footerCardDescription(){
        return $this->footerCardDescription;
}



}