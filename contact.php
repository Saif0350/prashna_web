<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Prashna | Makeup Artishry</title>
    <!--Google font-->
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans:100,300,400,600,600i,700" rel="stylesheet">
    <!--favicon-->
    <link rel="icon" href="assets/images/favicon.png">
    <!--stylesheet-->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/fontello.css">
    <link rel="stylesheet" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="assets/css/responsive.css">
</head>

<body>

    <?php include 'navbar.php' ?>

    <!--===========================
        Start Breadcrumb
===========================-->
    <section class="breadcrumb_section text-center section_padding" style="background:#e4e4e4 url(assets/images/prashnaallimages/image00001.jpeg) center left no-repeat">
        <ul class="breadcrumb">
            <li><a href="index.html">Home</a></li>
            <li style="color: #fff;"> Contact</li>
        </ul>
        <h1 style="color: #fff;">Contact us</h1>
    </section><!--end .breadcrumb_section-->
    <!--===========================
        End Breadcrumb
===========================-->

    <!--===========================
        Start Contact Form
===========================-->
    <section class="contact_form_area contact_us section_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="contact-right contact_details">
                        <div class="hero-title-with-shape">
                            <h4 class="heading_with_border">Contact Detail</h4>
                            <h1>We offer 24/7 emergency service to all of our customers</h1>
                        </div><!--end .hero-title-with-shape-->
                        <!-- <p>There are many variations of passages of new lorem ipsum available, but the majority have suffered.</p> -->
                        <div class="contact_location_box">
                            <div class="contact_location_map" style="text-align: center;">
                                <i style="font-size: 50px;" class="fa fa-instagram"></i>
                                <p><a href="https://www.instagram.com/prashna.y/" target="_blank">prashna.y</a></p>
                            </div><!--end .contact_location_map-->
                            <div class="contact_location_map contact_location_call" style="text-align: center;">
                                <i style="font-size: 50px;" class="fa fa-whatsapp"></i>
                                <p><a href="https://wa.me/261341128282?text=Hi" target="_blank">+261 34 11 282</a></p>
                            </div><!--end .contact_location_map .contact_location_call-->
                        </div><!--end .contact_location_box-->
                    </div><!--end .contact-right .contact_details-->
                </div><!--end .col-md-6-->
                <div class="col-md-6">
                    <div class="contact-right contact-right-style-2 responsive_mt">
                        <form action="#" method="post">
                            <input class="half_width input_m_right" type="text" name="name" placeholder="Your name">
                            <input class="half_width" type="EMAIL" name="email" placeholder="Email address">
                            <input type="tel" name="tel" placeholder="Phone number">
                            <textarea name="content" id="content" cols="20" rows="5" placeholder="Write message"></textarea>
                            <button class="btn-yellow" value="SUBMIT NOW">SUBMIT NOW</button>
                        </form>
                    </div><!--end .contact-right .contact-right-style-2-->
                </div><!--end .col-md-6-->
            </div><!--end .row-->
        </div><!--end .container-->
    </section><!--end .contact_form_area-->
    <!--===========================
        End Contact Form
===========================-->

    <!--===========================
        Start Map
===========================-->
    <div class="map_section">
        <div id="map"></div>
    </div><!--end .map_section-->
    <!--===========================
        End Map
===========================-->

    <?php include 'footer.php' ?>



    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/jquery.magnific-popup.min.js"></script>
    <script src="assets/js/waypoint.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/custom-map.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA_Agsvf36du-7l_mp8iu1a-rXoKcWfs2I"></script>
    <script src="assets/js/custom.js"></script>

</body>

</html>