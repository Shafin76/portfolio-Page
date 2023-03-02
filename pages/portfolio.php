<?php include "pages/header.php";?>
<title>Portfolio page</title>
</head>
<body>

<?php include "nav.php"; ?>
    <section class="py-5 bg-dark-subtle">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="row">
                            <div class="col-5">
                                <img src="assets/image/<?php echo $bio_data['image'];?>" class="w-100 h-100" alt="">
                            </div>
                            <div class="col-7">
                                <div class="card-body">
                                    <h1><?php echo $bio_data['name'];?></h1>
                                    <h5>Address: </h5><p><?php echo $bio_data['address'];?></p>
                                    <h5>facebook:</h5><p><?php echo $bio_data['facebook'];?></p>
                                    <h5>Twitter:</h5> <p><?php echo $bio_data['twitter'];?></p>
                                    <h5>LinkedIn:</h5><p><?php echo $bio_data['linkedin'];?></p>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
<hr class="mt-5 w-75 mx-auto">
    <section class="py-5">
        <h2 class="text-center">Academic Information</h2>
        <div class="col-sm-6 mx-auto py-5">
            <table class="table table-bordered table-striped text-center">
                <tr class="table-success">
                    <th>Degree Name</th>
                    <th>Institute</th>
                    <th>Passing year</th>
                    <th>Result</th>
                </tr>
                <?php foreach ($educations as $education){?>
                    <tr>
                        <td><?php echo $education['exam-name'];?></td>
                        <td><?php echo $education['institute'];?></td>
                        <td><?php echo $education['passing-year'];?></td>
                        <td><?php echo $education['result'];?></td>
                    </tr>
                <?php }?>
            </table>
        </div>

    </section>

    <section class="py-5">
        <div class="container">
            <div class="row">
                <h1 class="text-center">Personal Information</h1>
                <div class="col-sm-6 mx-auto">
                    <div class="d-flex"><h6>Name: </h6> <p class="ms-2"><?php echo $bio_data['name'];?></p></div>
                    <div class="d-flex"><h6>Address:</h6> <p class="ms-2"><?php echo $bio_data['address'];?></p></div>
                    <div class="d-flex"><h6>Email:</h6> <p class="ms-2"><?php echo $bio_data['email'];?></p></div>
                    <div class="d-flex"><h6>Gender:</h6> <p class="ms-2"><?php echo $bio_data['gender'];?></p></div>
                    <div class="d-flex"><h6>Religion:</h6> <p class="ms-2"><?php echo $bio_data['religion'];?></p></div>
                    <div class="d-flex"><h6>Date Of Birth:</h6> <p class="ms-2"><?php echo $bio_data['dateofbirth'];?></p></div>
                </div>
            </div>
        </div>
    </section>
    <section class="mt-3 py-5 bg-success-subtle">
        <div class="container">
            <h1 class="text-center">Training And Course </h1>
            <div class="row row-cols-1 row-cols-md-3 g-4 py-4">
                <?php foreach ($courses as $course){?>
                    <div class="col col-sm-6 col-md-6 col-lg-4">
                        <div class="card">
                            <img src="assets/image/<?php echo $course['image'];?>" class="card-img-top" height="300" alt="...">
                            <div class="card-body text-center">
                                <h3><?php echo $course['course_name'];?></h3>
                                <h5 class="card-title"><?php echo $course['course_duration'];?></h5>
                                <p class="card-text"><?php echo $course['course_institute'];?></p>
                            </div>
                        </div>
                    </div>
                <?php }?>
            </div>
        </div>
    </section>
<?php include 'footer.php';?>
