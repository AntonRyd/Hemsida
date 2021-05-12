<?php
include("config.php");

include("includes/head.php");
 
?>

    <title>CykelEliten</title>
    
</head>

<body>
    

    <!-- Preloader, när sidan laddas ser användaren en blå cirekl som laddas, detta används för att göra användaren road  -->
    
    <!-- Slutar Preloader -->

    <!-- Start Header Area -->
    <?php include("navbar.php"); ?>
    <!-- Slutar Header Area -->

    <!-- Start Hero Area -->
    <section class="hero-area">
        <!-- Single Slider -->
        <div class="hero-inner">
            <div class="container">
                <div class="row ">
                    <div class="col-lg-6 co-12">
                        <div class="home-slider">
                            <div class="hero-text">
                                <h1 class="wow fadeInUp" data-wow-delay=".3">Återförsäljare till Trek </h1>
                                <p class="wow fadeInUp" data-wow-delay=".5s"> Trek, cyklar för olika prisklasser samt användning.
                                     <br> Kontakta oss för frågor som du undrar över.
                                    <br>Kontaktuppgifter syns längre ner.</p>
                                <div class="button wow fadeInUp" data-wow-delay=".7s">
                                    <a href="shop.php" class="btn">Cyklar</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--/ Slutar Single Slider -->
    </section>
    <!--/ Slutar Hero Area -->

  

    <!-- Start AOm oss Area -->
    <section class="about-us section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-12">
                    <div class="about-left">
                        <div class="section-title align-left">
                            <span class="wow fadeInDown" data-wow-delay=".2s">Vad vi gör</span>
                            <h2 class="wow fadeInUp" data-wow-delay=".4s">Vi säljer cyklar och arrangerar tävlingar</h2>
                            <p class="wow fadeInUp" data-wow-delay=".6s">
                                </p>
                        </div>
                        <div class="about-tab wow fadeInUp" data-wow-delay=".4s">
                            <!-- Nav Tab  -->
                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item"><a class="nav-link active" data-toggle="tab" href="#t-tab1"
                                        role="tab">Styrka</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab2"
                                        role="tab">Skicklighet</a></li>
                                <li class="nav-item"><a class="nav-link" data-toggle="tab" href="#t-tab3"
                                        role="tab">Snabbhet</a></li>
                            </ul>
                            <!--/ Slutar Nav Tab -->
                            <div class="tab-content" id="myTabContent">
                                <!-- Tab 1 -->
                                <div class="tab-pane fade show active" id="t-tab1" role="tabpanel">
                                    <div class="tab-content">
                                        <p></p>
                                        <ul>
                                            <li><i class="lni lni-checkmark-circle"></i> </li>
                                            <li><i class="lni lni-checkmark-circle"></i> </li>
                                            <li><i class="lni lni-checkmark-circle"></i> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Tab 1 -->
                                <!-- Tab 2 -->
                                <div class="tab-pane fade" id="t-tab2" role="tabpanel">
                                    <div class="tab-content">
                                        <p></p>
                                        <p></p>

                                    </div>
                                </div>
                                <!--/ End Tab 2 -->
                                <!-- Tab 3 -->
                                <div class="tab-pane fade" id="t-tab3" role="tabpanel">
                                    <div class="tab-content">
                                        <p></p>
                                        <ul>
                                            <li><i class="lni lni-checkmark-circle"></i> </li>
                                            <li><i class="lni lni-checkmark-circle"></i> </li>
                                            <li><i class="lni lni-checkmark-circle"></i> </li>
                                        </ul>
                                    </div>
                                </div>
                                <!--/ End Tab 3 -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-12">
                    <div class="about-right wow fadeInRight" data-wow-delay=".4s">
                        <img src="assets/images/about/cykel2.jpg" alt="#">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /Slut på Om oss -->
    <section class="intro-video-area overlay section">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title white-text">
                        <span class="wow fadeInDown" data-wow-delay=".2s">Sugen på att se vad vi gör?</span>
                        <h2 class="wow fadeInUp" data-wow-delay=".4s"></h2>
                        <p class="wow fadeInUp" data-wow-delay=".6s">
                            </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="intro-video-play">
                        <div class="row justify-content-center">
                            <div class="col-lg-10 col-12">
                                <div class="play-thumb wow zoomIn" data-wow-delay=".2s">
                                    <a href="https://www.youtube.com/watch?v=MWyBgudQqsI&pbjreload=101"
                                        class="glightbox video"><i class="lni lni-play"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> <!-- row -->
        </div>
    </section>

   
    
    <!-- Start nyhets mail -->
<?php 
if (isset($_POST["email"])) {
    include("mail.php");
    sendMail($_POST["email"], "Newsletter confirmation", "You have been subscribed to the Cykeleliten newletter with this email: " . $_POST["email"]);
}
?>
    

    <section class="newsletter-area section">
        <div class="container">
            <div class="row ">
                <div class="col-lg-8 col-12">
                    
                    <div class="subscribe-text wow fadeInLeft" data-wow-delay=".2s">
                        <h6>Skriv upp dig för mer information</h6>
                        <p class="">Skriv upp för att få nyheter <br> och för att få bättre priser</p>
                        <form action= '' method="POST" target="_blank" class="newsletter-inner">
                            <input name="email" placeholder="Din mail" class="common-input"
                                onfocus="this.placeholder = ''" onblur="this.placeholder = 'Din mail'"
                                required="" type="email">
                            <div class="button">
                                <button class="btn">Bli medlem</button>
                            </div>
                        </form>
                    </div>
                   
               
    <!-- /Slutar nyhets tråd -->

   

    <!-- Start Footer -->
    <footer class="footer">
        
        <div class="footer-middle">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-6 col-12">
                      
                        <div class="f-about single-footer">
                            <div class="logo">
                                <a href="index.html"><img src="assets/images/logo/logo.png" alt="Logo"></a>
                            </div>
                            <p>Köp dina cyklar här för rimliga priser i olika prisklasser, bli medlem för rabatt</p>
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
                                <li><a href="#">Om osss</a></li>
                                <li><a href="#">Service</a></li>
                                <li><a href="#">Kontakta oss</a></li>
                                <li><a href="#">Vår blogg</a></li>
                            </ul>
                        </div>
                  
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                       
                        <div class="single-footer f-link">
                            <h3>Mer länkar</h3>
                            <ul>
                                <li><a href="#">Ämnen</a></li>
                                <li><a href="#">Terms of Use</a></li>
                                <li><a href="#">Privacy Policy</a></li>
                           
                            </ul>
                        </div>
                       
                    </div>
                    <div class="col-lg-3 col-md-6 col-12">
                       
                        <div class="single-footer f-link">
                            <h3>Support</h3>
                            <ul>
                                <li><a href="#">Cookies</a></li>
                                <li><a href="#">Forum</a></li>
                               
                                <li><a href="#">Sitemap</a></li>
                            </ul>
                        </div>
                    
                    </div>
                </div>
            </div>
        </div>
  
        <!-- Start Footer Längst ner -->
        <div class="footer-bottom">
            <div class="container">
                <div class="inner">
                    <div class="row">
                        <div class="col-12">
                            <div class="left">
                              
                                       
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
       
    </footer>
    <!--/ Slutar footer area-->

    <!-- ========================= Scrollar till topp ========================= -->
    <a href="#" class="scroll-top btn-hover">
        <i class="lni lni-chevron-up"></i>
    </a>

    <!-- ========================= JS här ========================= -->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/count-up.min.js"></script>
    <script src="assets/js/wow.min.js"></script>
    <script src="assets/js/tiny-slider.js"></script>
    <script src="assets/js/glightbox.min.js"></script>
    <script src="assets/js/imagesloaded.min.js"></script>
    <script src="assets/js/isotope.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script type="text/javascript">
        //========= glightbox
        GLightbox({
            'href': 'https://www.youtube.com/watch?v=MWyBgudQqsI&pbjreload=101',
            'type': 'video',
            'source': 'youtube', //vimeo, youtube or local
            'width': 900,
            'autoplayVideos': true,
        });
    </script>
</body>

</html>