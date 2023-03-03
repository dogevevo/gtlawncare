<?php include('php/secction/header.php') ?>

    <!-- pagebanner -->
    <section id="pagebanner">
        <div class="page-title">
            <h2 class="white text-center">Gallery</h2>
        </div>
    </section>
    <!-- End Pagebanner -->

    <!-- breadcrumb -->
    <div class="breadcrumb-main">
        <div class="container">
            <ul class="breadcrumb">
                <li><a href="index.php"><i class="fa fa-home"></i></a></li>
                <li><a href="index.php">Home</a></li>
                <li class="active">Gallery</li>
            </ul>
        </div>
    </div><!-- End breadcrumb -->

    <!--* Portfolio*-->
    <section id="mt_project" class="prject_two">
        <div class="container">

            <div class="project_list">
                <div class="row">

                  <?php for ($b=1; $b <=9; $b++) {?>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                      <div class="project-image">
                        <a href="img/project/gall/<?php echo $b?>.jpg" data-toggle="lightbox" data-footer="A custom footer text" data-gallery="example-gallery">
                          <img src="img/project/gall/<?php echo $b?>.jpg" class="img-fluid">
                          <div class="project-overlay text-center">
                            <h3 class="text-center white"></h3>
                            <p class="white"> <?php echo $gall ?> </p>
                          </div>
                        </a>
                      </div>
                    </div>
                  <?php } ?>

                 </div>
            </div>
        </div>
    </section>
    <!--* End Portfolio*-->

    <br><br><br><br>
<!-- <div class="inner-page-banner-area">
    <div class="container">
        <div class="pagination-area">
            <h2>Galeria</h2>
            <ul>
                <li><a href="index.php">Inicio</a> /</li>
                <li>Galeria</li>
            </ul>
        </div>
    </div>
</div>

<div class="project-gallery4-area">
    <div class="container">
        <div class="row">
            <?php for ($b=1; $b <=7; $b++) {?>
                <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                    <div class="project4-box">
                        <div class="project4-content-holder">
                            <div class="project4-content">
                                <a href="img/gallery/full/<?php echo $b;?>.jpg" class="image-popup">
                                    <p class="gallery-details"><?php echo $Company;?></p>
                                </a>
                            </div>
                            <a href="img/gallery/full/<?php echo $b;?>.jpg" class="image-popup">
                                <i aria-hidden="true" class="fa fa-search text-white"></i>
                            </a>
                        </div>
                        <div class="project4-img-holder">
                            <img class="img-responsive" src="img/gallery/full/<?php echo $b;?>.jpg" alt="Our Gallery" loading="lazy">
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>        
    </div>
</div> -->

<?php include('php/secction/seccion-video.php') ?> 
<?php include('php/secction/footer.php') ?>