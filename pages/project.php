<?php include "pages/header.php";?>
<title>Project page</title>
</head>
<body>

<?php include "banner.php"; ?>
<?php include "nav.php"; ?>
    <section class=" py-5 bg-success-subtle">
        <div class="container">
            <h1 class="text-center">My Projects</h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                <?php foreach ($projects as $project){?>
                    <div class="col  col-md-6 col-lg-4">
                        <div class="card shadow bg-white rounded">
                            <img src="assets/image/<?php echo $project['image'];?>" height="250" class="card-img-top p-2" alt="...">
                            <div class="card-body text-center">
                                <hr class="w-75 mx-auto">
                                <h3><?php echo $project['name'];?></h3>
                                <p class="card-title text-muted"><?php echo $project['description'];?></p>
                                <a href="" class="btn btn-outline-success">Read More</a>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
    <?php include 'footer.php';?>
