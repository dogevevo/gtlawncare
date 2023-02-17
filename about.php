<?php include('php/secction/header.php') ?>


 <!-- pagebanner -->
 <section id="pagebanner">
        <div class="page-title">
            <h2 class="white text-center">About us</h2>
        </div>
    </section>
    <!-- End Pagebanner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li class="active">About Us</li>
            </ul>
        </div>
    </div><!-- End breadcrumb -->

    <!--*About*-->
    <section id="mt_about">
        <div class="container">
   
            <div class="about_inner">
                <div class="row">

                    <div class="col-md-6 col-sm-12">
                        <div class="about-content">
                            <span class="mar-bottom-15">About Company</span>
                            <h2 class="mar-bottom-30"><?php echo $About[0]  ?></h2>
                            <p class="mar-bottom-40"><?php echo $About[1]  ?></p>
                            <a href="#" class="btn mt_btn_yellow">Our Services</a>
                        </div>
                    </div>

                    <div class="col-md-6 col-sm-12">
                        <div class="about-img">
                            <img src="img/project/2.jpg">
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!--*EndAbout*-->

    <?php include('php/secction/ChooseUs.php') ?>

    <br><br><br>
    <!--* End choose us*-->
<?php include('php/secction/seccion-partner.php') ?>
<?php include('php/secction/footer.php') ?>