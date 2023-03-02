

<?php include "pages/header.php";?>
<title>Gallery page</title>
<link rel="stylesheet" href="assets/css/per.css">
</head>
<body>

<?php include "banner.php"; ?>

<?php include "nav.php"; ?>
<Section class="py-5">
    <div class="container">
        <div class="row">
            <div class="card border-0">
                <h1 class="text-center ">My Gallery</h1>
                <div class="row row-cols-1 row-cols-md-3 g-4 py-4 ">
                    <?php foreach ($projects as $project){?>
                        <div class="col  col-md-6 col-lg-4 border-0 pb-3">
                            <div class="card1 card shadow bg-white rounded  ">
                                <div class="image text-center">

                                    <img src="assets/image/<?php echo $project['image'];?>" height="250"  class="card-img-top p-2 " alt="...">

                                </div>
                                <div class="content">
                                    <h3  ><?php echo $project['name'];?></h3>
                                </div>


<!--                                <div class="card-body text-center">-->
<!--                                    <hr class="w-75 mx-auto">-->
<!--                                    <p class="card-title text-muted">--><?php //echo $project['description'];?><!--</p>-->
<!--                                    <a href="" class="btn btn-outline-success">Read More</a>-->
<!--                                </div>-->


                            </div>
                        </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</Section>

<?php include "pages/footer.php"?>