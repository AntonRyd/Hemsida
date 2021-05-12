<?php   include("includes/head.php");
include("navbar.php"); ?>

    <title>Kontakt</title>
</head>

<body>
   

    <!-- Preloader -->
    
    <!-- Slutar Preloader -->

    <!-- Start Header Area -->
   <?php   include("navbar.php"); ?>
    <!-- Slut på  Header Area -->

    <!-- Start Breadcrumbs, använder länkar till föregående sidor, -->
    <div class="breadcrumbs">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 offset-lg-2 col-12">
                    <div class="breadcrumbs-content">
                        <h1 class="page-title">Kontakta oss</h1>
                        <p> </p>
                    </div>
                    <ul class="breadcrumb-nav">
                        <li><a href="index.php">Hem</a></li>
                        <li>Kontakta</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!-- Slut på Breadcrumbs -->

    <!-- Start Kontakt Area -->
    <section id="contact-us" class="contact-us section">
        <div class="container">
            <div class="contact-head wow fadeInUp" data-wow-delay=".4s">
                <div class="row">
                    <div class="col-lg-5 col-12">
                        <div class="single-head">
                            <div class="contant-inner-title">
                                <h4>Kontakt information</h4>
                                <p> Svarar dygnet runt</p>
                            </div>
                            <div class="single-info">
                                <i class="lni lni-phone"></i>
                                <ul>
                                    <li>+46112-911</li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="lni lni-envelope"></i>
                                <ul>
                                    <li><a href="mailto:info@dinmail.com">cykeleliten@hotmail.com</a></li>
                                </ul>
                            </div>
                            <div class="single-info">
                                <i class="lni lni-map"> Borås</i>
                                <ul>
                                    <li></li>
                                </ul>
                            </div>
                            <div class="contact-social">
                                <h5>Följ oss</h5>
                                <ul>
                                    <li>
                                        <a href="#">
                                            <span class="icon-1"><i class="lni lni-facebook-filled"></i></span>
                                            <span class="icon-2"><i class="lni lni-facebook-filled"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-1"><i class="lni lni-twitter-original"></i></span>
                                            <span class="icon-2"><i class="lni lni-twitter-original"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-1"><i class="lni lni-linkedin-original"></i></span>
                                            <span class="icon-2"><i class="lni lni-linkedin-original"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-1"><i class="lni lni-instagram"></i></span>
                                            <span class="icon-2"><i class="lni lni-instagram"></i></span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <span class="icon-1"><i class="lni lni-behance-original"></i></span>
                                            <span class="icon-2"><i class="lni lni-behance-original"></i></span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-7 col-12">
                        <div class="form-main">
                            <form class="form" method="post" action="assets/mail/mail.php">
                                <div class="row">
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="name" type="text" placeholder="Ditt namn" required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="subject" type="text" placeholder="Ämne"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="email" type="email" placeholder="Din mail"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-12">
                                        <div class="form-group">
                                            <input name="phone" type="text" placeholder="Telefon"
                                                required="required">
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group message">
                                            <textarea name="message" placeholder="Ditt meddelande"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-group button">
                                            <button type="Skicka" class="btn ">Skicka</button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/ Slut Contact Area -->

    
    <div class="map-section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="map-container">
                        <div class="mapouter">
                            <div class="gmap_canvas"><iframe width="100%" height="400" id="gmap_canvas"
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d136353.26138413357!2d12.787088041953103!3d57.72461573742907!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465aa0b04bdcfeed%3A0x7c327e8fc1abfa59!2zQm9yw6Vz!5e0!3m2!1ssv!2sse!4v1617266322233!5m2!1ssv!2sse" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                                    </a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Slut på google maps kod -->

    <!-- Start Nyhets Area -->
    <section class="newsletter-area section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-12">
                    <!-- Start Nyhets Form -->
                    <div class="subscribe-text wow fadeInLeft" data-wow-delay=".2s">
                        <h6>Anmäl dig för nyheter</h6>
                        <p class=""> <br> .</p>
                        <form action="mail/mail.php" method="get" target="_blank" class="newsletter-inner">
                            <input name="EMAIL" placeholder="Din mail" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Din mail'"
                                required="" type="email">
                            <div class="button">
                                <button class="btn">Anmäl dig nu!</button>
                            </div>
                        </form>
                    </div>
                    <!-- Slutar Newsletter Form -->
                </div>
                <div class="col-lg-4 col-12">
                    <div class="mini-call-action wow fadeInRight" data-wow-delay=".4s">
                        <h4></h4>
                        <p>.</p>
                        <div class="button">
                            <a href="#" class="btn"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
  

    <!-- Start  På Footer Area -->
    <footer class="footer">
        <!-- Start Middle Top -->
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="f-about single-footer">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                            </div>
                            <p></p>
                            <div class="footer-social">
                                <ul>
                                    <li><a href="#"><i class="lni lni-instagram"></i></a></li>
                                    <li><a href="#"><i class="lni lni-twitter"></i></a></li>
                                    <li><a href="#"><i class="lni lni-linkedin"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                      
                        <div class="single-footer f-link">
                            <h3>Sidor</h3>
                            <ul>
                                <li><a href="#">Om oss</a></li>
                                <li><a href="#">Våra Service</a></li>
                                <li><a href="#">Kontakta oss</a></li>
                                <li><a href="#">Vår Blogg</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>

                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3></h3>
                            <ul>
                                <li><a href="#">Topics</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                                <li><a href="#">License</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                        <!-- Single Widget -->
                        <div class="single-footer f-link">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Forum</a></li>
                                <li><a href="#">Support Team</a></li>
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                        <!-- End Single Widget -->
                    </div>
                </div>
            </div>
        </div>
        <!--/ End Footer Middle -->
        <!-- Start Footer Bottom -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="left">
                                <p><a href="" rel="nofollow"
                                        target="_blank"></a></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Footer Middle -->
    </footer>
    <!--/ End Footer Area -->

    <!-- ========================= scrollar till toppen ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS här========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
</body>

</html>