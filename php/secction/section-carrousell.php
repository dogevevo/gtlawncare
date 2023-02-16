<div class="about-us-page1-area">
    <div class="project-gallery4-area">
        <div class="container">
            <div class="row">
                <?php for ($i = 0; $i <= 7; $i++) { ?>
                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                        <div class="product-card">
                            <div class="badge">Nuevo</div>
                            <div class="product-tumb">
                                <img src="img/product/<?php echo $i;?>.png" alt="">
                            </div>
                            <div class="product-details">
                                <span class="product-catagory">Café en granos</span>
                                <h4><a href=""><?php echo $Name[$i]; ?></a></h4>
                                <p><?php echo $Detail[$i]; ?></p>
                                <div class="product-bottom-details">
                                    <div class="product-price">U$<?php echo $Small[$i]; ?></div>
                                    <div class="product-links">
                                        <a href="Shop.php"><i class="fa fa-heart"></i></a>
                                        <a href="Shop.php"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>
</div>  