<?php
require_once "vendor/autoload.php";
use App\classes\Data;
use App\classes\Client;
use App\classes\Portfolio;
use App\classes\Project;
use App\classes\Services;

$footerCardDetails=new Data();
 $footerCardTitle=$footerCardDetails->footerCardTitle();

 $footerCardDescription=$footerCardDetails->footerCardDescription();

$servs= new Services();
$allService=$servs->allService();

if(isset($_GET['page'])){
    if($_GET['page']=="home"){
        include "pages/home.php";
    }

    elseif($_GET['page']=="about"){
        $client= new Client();
        $sClient= $client->clientReview();
        include "pages/about.php";
    }

    elseif($_GET['page']=="portfolio"){
        $portfolio = new Portfolio();
        $bio_data=$portfolio->allBiodata();
        $educations=$portfolio->allEducation();
        $courses=$portfolio->allCourses();
        include "pages/portfolio.php";
    }
    elseif($_GET['page']=="my-project"){
        $project= new Project();
        $projects= $project->allProject();
        include "pages/project.php";
    }

    elseif($_GET['page']=="gallery"){
        $project= new Project();
        $projects= $project->allProject();
        include "pages/gallery.php";
    }
    elseif($_GET['page']=="contact"){
        include "pages/contact.php";
    }
    elseif($_GET['page']=='service'){
        $service= new Services();
        $singleService= $service->getServiceByID($_POST);
        include "pages/service.php";

    }
}