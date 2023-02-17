<?php @session_start();?>
<!DOCTYPE html>
<?php include 'php/text.php';?>
<html lang="en">

<head>
<!-- Meta Tags -->
<meta name="viewport" content="width=device-width,initial-scale=1.0"/> 
<meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
<meta name="description" content="<?php echo $ExDescription;?>" />
<meta name="author" content="MAVEN" />

<!-- Page Title -->
<title><?php if($page_name=='index.php'){echo "$Company";}
elseif ($page_name=='about.php') {echo "$Company | About";}
elseif ($page_name=='services.php') {echo "$Company | Services";}
elseif ($page_name=='gallery.php') {echo "$Company | Gallery";}
elseif ($page_name=='testimonials.php') {echo "$Company | Testimonials";}
elseif ($page_name=='thank-you.php') {echo "$Company";}
elseif ($page_name=='contact.php') {echo "$Company | Contact";}?>
</title>    

<link rel="shortcut icon" type="image/x-icon" href="img/favicon.png">

<!-- Bootstrap core CSS -->
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

<!--Default CSS-->
<link href="css/default.css" rel="stylesheet" type="text/css">

<!--Custom CSS-->
<link href="css/style.css" rel="stylesheet" type="text/css">

<!--Blog CSS-->
<link href="css/blog.css" rel="stylesheet" type="text/css">

<!--Plugin CSS-->
<link href="css/plugin.css" rel="stylesheet" type="text/css">

<!--Font Awesome-->
<link href="css/font-awesome.css" rel="stylesheet" type="text/css">



</head>

<body>
<?php $_SESSION['token'] = md5(microtime()); ?>

    <script type="text/javascript">
        (function() {
            var options = {
                facebook: "351215899184325", // Facebook page ID
                whatsapp: "<?php echo $PhoneName.$Phone;?>", // WhatsApp number
                call_to_action: "Message us", // Call to action
                button_color: "#8b3e0e", // Color of button
                position: "left", // Position may be 'right' or 'left'
                order: "facebook,whatsapp", // Order of buttons
            };
            var proto = document.location.protocol,
                host = "getbutton.io",
                url = proto + "//static." + host;
            var s = document.createElement('script');
            s.type = 'text/javascript';
            s.async = true;
            s.src = url + '/widget-send-button/js/init.js';
            s.onload = function() {
                WhWidgetSendButton.init(host, proto, options);
            };
            var x = document.getElementsByTagName('script')[0];
            x.parentNode.insertBefore(s, x);
        })();
    </script>
 

 <body>
    <!--PRELOADER-->
    <div class="preloader"><div class="spinner"></div></div>

    <!--*Header*-->
    <header id="inner-navigation">

        <!-- top bar -->
        <div class="topbar-section">
            <div class="container">
                <div class="topbar-inner">
                    <div class="top-bar-left pull-left">
                   <ul>
                       <li><i class="fa fa-phone"></i> Phone:  <?php echo $Phone?></li>
                       <li><i class="fa fa-envelope"></i> Email: <?php echo $Mail?></li>
                   </ul>
                    </div>
              
                    <div class="top-bar-right pull-right">
                        <ul>
                          <li><a href="https://www.instagram.com/"><i class="fa fa-instagram"></i></a></li>
                          <li><a href="https://workspace.google.com"><i class="fa fa-google"></i></a></li>
                          <li><a href="https://twitter.com/?lang=es"><i class="fa fa-twitter"></i></a></li>
                          <li><a href="https://www.facebook.com/"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- navbar start -->
        <nav class="navbar navbar-default navbar-fixed-top navbar-sticky-function navbar-arrow">

            <div class="container">

                <div class="logo pull-left">
                    <a href="index.php"><img src="img/c-logo.png" alt=""></a>
                </div>
                
                <div id="navbar" class="navbar-nav-wrapper pull-right">
                    <ul class="nav navbar-nav navbar-right" id="responsive-menu">
                        <li  class="active">
                            <a href="index.php">Home <i class="fa fa-angle-down"></i></a>
                            
                            
                        </li>
                        <li>
                            <a href="services.php">Services<i class="fa fa-angle-down"></i></a>
                            
                        </li>            
                        <li>
                            <a href="about.php">About Us<i class="fa fa-angle-down"></i></a>
                            
                        </li>
                        <li>
                            <a href="Gallery.php">Gallery<i class="fa fa-angle-down"></i></a>
                            
                        </li>
                        
                        <li>
                            <a href="contact.php">Contact Us <i class="fa fa-angle-down"></i></a>
                              
                        </li>

                        <li>
                            <div class="header-search">
                                <a href="#" class="search-icon"><i class="fa fa-search"></i></a>
                                <div class="search-box-wrap" style="display: none;">
                                    <div class="searchform" role="search">
                                        <form class="search-form" method="get" action=".">
                                            <input type="text" name="s" id="s" placeholder="Search..." value="" class="search-field">
                                            <input type="submit" class="search-submit" value="Search">
                                        </form>
                                    </div><!-- .searchform -->
                                </div><!-- .search-box-wrap -->
                            </div>
                        </li>
                        <li>
                            
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->

          

            </div>
            
            <div id="slicknav-mobile"></div>
        </nav>
        <!-- navbar end -->
    </header>
    <!--* End Header*-->
