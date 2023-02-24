<?php
require_once "vendor/autoload.php";
use App\classes\Data;
use App\classes\Client;

$footerCardDetails=new Data();
 $footerCardTitle=$footerCardDetails->footerCardTitle();

 $footerCardDescription=$footerCardDetails->footerCardDescription();

if(isset($_GET['page'])){
    if($_GET['page']=="home"){
        include "pages/home.php";
    }

    if($_GET['page']=="about"){
        $client= new Client();
        $sClient= $client->clientReview();
        include "pages/about.php";
    }

    if($_GET['page']=="portfolio"){
        include "pages/portfolio.php";
    }
    if($_GET['page']=="my-project"){
        include "pages/my-project.php";
    }

    if($_GET['page']=="gallery"){
        include "pages/gallery.php";
    }
    if($_GET['page']=="contact"){
        include "pages/contact.php";
    }
}