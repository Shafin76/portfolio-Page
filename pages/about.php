

<?php include "pages/header.php";?>
<title>About page</title>
</head>
<body>

<?php include "banner.php"; ?>

<?php include "nav.php"; ?>

<section class="py-5 bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6 mx-auto">
                <div class="card card-img">
                    <img src="assets/image/sbook.jpg" alt="" class="w-100 " height="400">
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-7 mx-auto">
                <div class="card-text ">
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eius illum mollitia! A aspernatur facere magni officiis,
                        porro ratione voluptas? A accusamus blanditiis consequatur,
                        cum deleniti dicta dignissimos ducimus fugiat, minima mollitia nemo nostrum omnis quasi repudiandae rerum sint unde!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eius illum mollitia! A aspernatur facere magni officiis,
                        porro ratione voluptas? A accusamus blanditiis consequatur,
                        cum deleniti dicta dignissimos ducimus fugiat, minima mollitia nemo nostrum omnis quasi repudiandae rerum sint unde!</p>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aliquid eius illum mollitia! A aspernatur facere magni officiis,
                        porro ratione voluptas? A accusamus blanditiis consequatur,
                        cum deleniti dicta dignissimos ducimus fugiat, minima mollitia nemo nostrum omnis quasi repudiandae rerum sint unde!</p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-5 bg-success-subtle">
    <div class="container">
        <div class="row">
            <div class="col">
                <h1 class="text-center fw-bolder text-success">Client Review</h1>
            </div>
        </div>
        <div class="row">
            <?php foreach ($sClient as $client) {?>
                <div class="col-md-4">
                    <div class="card text-center   m-2">
                        <div class="card-img">
                            <img src="assets/image/<?= $client['img']?>" alt="" class="w-100 rounded-top" height="300">
                        </div>
                        <div class="card-title">
                            <h2 class=""><?= $client['name']?></h2>
                        </div>
                        <div class="card-body">
                            <p><?= $client['desc']?></p>
                        </div>
                    </div>
                </div>

            <?php } ?>
        </div>
    </div>
</section>

<?php include "pages/footer.php"?>


