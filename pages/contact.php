
<?php include "pages/header.php";?>

<title>Contact page</title>
</head>
<body>
<?php include "banner.php"; ?>
<?php include "nav.php"; ?>


<section class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-6 ">
                <div class="card h-100 bg-success-subtle  border-0">
                    <div class="card-title">
                        <h2 class="text-center rounded-top text-white bg-success">Direct Contact Information</h2>

                    </div>
                    <div class="card-body">
                        <address>
                            <p>
                                <i><b>Direct Contact: </b><?php echo $footerCardDescription[2][0];?></i> <br>
                                <i><b>Phone Number: </b><?php echo $footerCardDescription[2][1];?></i> <br>
                                <i> <b>Email: </b><?php echo $footerCardDescription[2][2];?></i>
                            </p>
                        </address>
                    </div>
                </div>
            </div>
            <div class="col-md-6 ">
                <div class="card border-0 bg-primary-subtle">
                    <div class="card-title">
                        <h2 class="text-center text-white bg-primary">Send Me Your Query</h2>
                    </div>
                    <div class="card-body text-capitalize ms-3 fw-bold">
                        <form action="">
                            <div class="row">
                            <label for="">name:</label>
                            <div>
                                <input type="text" name="name" placeholder="Your Name" />
                            </div>
                            </div>
                            <div class="row">
                                <label for="">email:</label>
                                <div>
                                    <input type="email" name="email" placeholder="Your email" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="">number:</label>
                                <div>
                                    <input type="text" name="number" placeholder="Your number" />
                                </div>
                            </div>
                            <div class="row">
                                <label for="">your comment:</label>
                                <div>
                                    <textarea name="comment" id="" cols="30" rows="1"type="text"  placeholder="Your comment"></textarea>

                                </div>
                            </div>
                            <div class="row">
                                <label for=""></label>
                                <div>
                                    <input type="submit" name="submit" value="Send" class="btn btn-success"  />
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>



<section class="py-5">
<div class="container">
    <div class="row w-100">
        <div class="col-12">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3651.9024424301397!2d90.39108011498136!3d23.750858084589126!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755b8bd552c2b3b%3A0x4e70f117856f0c22!2sBASIS%20Institute%20of%20Technology%20%26%20Management%20(BITM)!5e0!3m2!1sen!2sbd!4v1674716845331!5m2!1sen!2sbd" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </div>
</div>

</section>






<?php include "footer.php"; ?>









include "pages/footer.php";

