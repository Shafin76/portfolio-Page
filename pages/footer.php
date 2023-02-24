
<footer>

    <section class="bg-primary-subtle py-5 ">
            <div class="container  px-3">
                <div class="row ">
                    <div class="col-md-12">
                        <div class="card border-0 bg-primary-subtle">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="   p-2 ">
                                       <h4 class="fw-bold pt-2 text-center"><?php echo $footerCardTitle[0];?></h4>
                                        <hr class="w-50 mx-auto">
                                        <p class="text-md-center text-muted"><?php echo $footerCardDescription[0];?></p>

                                    </div>
                                </div>



                                <div class="col-md-3">

                                    <div class=" p-2 ">

                                      <h4 class="fw-bold pt-2 text-center "><?php echo $footerCardTitle[1];?></h4>
                                        <hr class="w-50 mx-auto">
                                        <ul class="list-unstyled text-md-center" >
                                            <?php foreach ($footerCardDescription[1] as $websiteLink)  { ?>
                                            <li><a href="#" class="text-decoration-style text-muted "><?php echo $websiteLink;?></a></li>
                                           <?php }?>
                                        </ul>
                                    </div>
                                </div>
                                
                                <div class="col-md-3">
                                    <div class="p-2 text-md-center ">
                                        <h4 class="fw-bold pt-2 text-center"><?php echo $footerCardTitle[2];?></h4>
                                        <hr class="w-50 mx-auto">
                                        <addres >
                                           <i><b>Direct Contact: </b><?php echo $footerCardDescription[2][0];?></i> <br>
                                            <i><b>Phone Number: </b><?php echo $footerCardDescription[2][1];?></i> <br>
                                           <i> <b>Email: </b><?php echo $footerCardDescription[2][2];?></i>
                                        </addres>

                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="fw-bold p-2 ">
                                        <h4 class="fw-bold pt-2 text-center"><?php echo $footerCardTitle[3];?></h4>
                                        <hr class="w-50  mx-auto">
                                        <form>
                                            <div class="mb-3
">
                                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                                <input type="email" class="form-control " id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter Your Email">
                                            </div>
                                            <button type="submit" class="btn btn-warning">Subscribe Now</button>
                                        </form>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
        </section>



    <section class="bg-dark py-2">
    <p class="text-center pt-3 text-secondary">copyright <span class="fw-bold">&copy;</span> Shafin Ahamed Reserved All Right . Design and Developed By Shafin</p>
    </section>





</footer>


<script src="assets/js/bootstrap.bundle.js"></script>
</body>
</html>