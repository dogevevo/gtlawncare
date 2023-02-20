<?php include('php/secction/header.php') ?>

<!-- pagebanner -->
<section id="pagebanner">
        <div class="page-title">
            <h2 class="white text-center">Contact Us</h2>
        </div>
    </section>
    <!-- End Pagebanner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li class="active">Contact Us</li>
            </ul>
        </div>
    </div><!-- End breadcrumb -->

    <!--* Contact*-->
    <section id="mt_contact" class="contact-main">
        <div class="container">

            <div class="row">
                <div class="col-xs-12 mar-bottom-30">
                    <div class="contact-info text-center">
                        <ul>
                            <li><i class="fa fa-map-marker"></i> <?php echo $Address ?></li>
                            <li><i class="fa fa-phone"></i> <?php echo $Phone?></li>
                            <li><i class="fa fa-envelope"></i> <?php echo $Mail?> </li>
                            <li><i class="fa fa-globe"></i> <?php echo $Domain ?></li>
                        </ul>
                    </div>
                </div>

                <div class="col-sm-6 col-xs-12">
                    <!-- Contact Us Map -->   
                    <div class="map mar-bottom-30">
                        <div id="map" style="height: 300px; width: 100%;">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3243.796327011681!2d-87.04249998445044!3d35.60809034158663!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x88637222e4947035%3A0x9b44b2bcd5903211!2s316%20W%2012th%20St%2C%20Columbia%2C%20TN%2038401%2C%20EE.%20UU.!5e0!3m2!1ses!2sni!4v1676904709623!5m2!1ses!2sni" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6 col-xs-12">
                    <div class="contact-inner">
                        <div class="contact_form">
                            <form id="contact_form">
                                <div class="form-group">
                                    <input type="text" name="name" id="name" placeholder="Your name" required>
                                </div> 
                                
                                <div class="form-group">   
                                    <input type="email" name="email" id="email" placeholder="Your email" required>
                                </div>

                                <div class="form-group">
                                    <textarea cols="30" rows="5" name="message" id="message" placeholder="Your message" required></textarea>
                                </div>
                                <button class="mt_btn_yellow" id="submit-btn">SEND MESSAGE
                                    <span class="mt_load">
                                        <span></span>
                                    </span>
                                </button>
                                <div id="msg"></div>
                            </form>
                        </div>   
                    </div> 
                </div>
            </div>
               
        </div>
    </section>
    <!--* End Contact*-->

    <!--*Newsletter*-->
    <div id="newsletter">
        <div class="container">
            <div class="row">
            <div class="col-sm-6 col-xs-12">
                <div class="news-content">
                    <h3>SUBSCRIBE TO OUR NEWSLETTER</h3>
                    <p class="white">Subscribe to our brief newsletter to get exclusive discounts and new theme launches right in your inbox.</p>
                </div>
            </div>
            <div class="col-sm-6 col-xs-12">
                <div class="mailpoet_form">
                    <form target="_self" method="post" action="" novalidate="">
                        <input type="email" class="mailpoet_text" name="" title="Email" placeholder="Please specify a valid email address.">

                        <div class="button"><input type="submit" class="mailpoet_submit" value="Subscribe!"></div>
                    </form>
                </div>
            </div>
            </div>
        </div>    
    </div>
    <!--*End Newsletter*-->











<?php include('php/secction/footer.php') ?>