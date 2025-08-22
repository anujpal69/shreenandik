<footer class="nandik-sec">
    <div class="container-xxl container-xxl-fluid">
        <div class="row g-xxl-5 g-xl-2 pb-4">
            <div class="col-xl-3 col-lg-4 col-sm-6 wow animate__animated animate__fadeInUp" data-wow-delay="0.2s">
                <div class="nandik-footer-logo">
                    <a href="index.php" class="nandik-img"><img src="public/assets/images/home/logo2.png" alt="shreenandik"></a>
                    <p class="text">Shreenandik Technologies: Transforming ideas into digital excellence with innovation
                        and quality.</p>
                </div>
            </div>
            <div class="col-xl-9 col-lg-8">
                <div class="row g-xxl-3 g-xl-2">

                    <div class="col-xl-4 col-lg-4 col-sm-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.2s">
                        <div class="nandik-widget">
                            <h3 class="title3">Solutions</h3>
                            <ul>
                                <li><a href="it-management.php">IT Management</a></li>
                                <li><a href="coming.php">Cloud Services</a></li>
                                <li><a href="ai-ml-solutions.php">Al & Ml</a></li>
                                <li><a href="software-development.php">Software Development</a></li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-xl-4 col-lg-4 col-sm-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.3s">
                        <div class="nandik-widget">
                            <h3 class="title3">Company</h3>
                            <ul>
                                <li><a href="about.php">About Us</a></li>
                                <li><a href="service.php">Services</a></li>
                                <li><a href="terms-of-conditions.php">Terms & Conditions</a></li>
                                <li><a href="privacy-policy.php">Privacy Policy</a></li>
                                <!-- <li><a href="return-refund.php">Return & Refund Policy</a></li> -->

                            </ul>
                        </div>
                    </div>
                    <div class="col-xl-4 col-lg-4 col-sm-6 wow animate__animated animate__fadeInUp"
                        data-wow-delay="0.4s">
                        <div class="nandik-widget">
                            <h3 class="title3">Contact Info</h3>
                            <ul>
                                <li><i class="fa-solid fa-phone-volume"></i> <a href="tel:9818250250"><span>+91
                                            9818250250</span></a></li>
                                <li><i class="fa-solid fa-envelope-open-text"></i> <a
                                        href="mailto:info@shreenandik.in"><span>info@shreenandik.in</span></a>
                                </li>
                                <li>
                                    <i class="fa-solid fa-location-dot"></i>
                                    <a href="https://maps.app.goo.gl/3iU15Exv6oRPUkt16" target="_blank"><span>1, A
                                            Block, Sector 59, Noida, U.P. 201301</span></a>
                                </li>
                            </ul>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <div class="nandik-copyright py-3">
            <div class="row">
                <div class="col-lg-6 col-sm-4 col-xs-12">
                    <div class="social-media-icon">
                        <ul>
                            <li><a target="_blank" href="https://www.facebook.com/shreenandik.in?mibextid=ZbWKwL"><i
                                        class="fa-brands fa-facebook-f"></i></a></li>
                            <li><a target="_blank" href="https://x.com/ShreeNandik?t=qPbXdc1kiu8ANB_6LR53fA&s=09"><i
                                        class="fa-brands fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.linkedin.com/company/shreenandik/"><i
                                        class="fa-brands fa-linkedin-in"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div
                    class="col-lg-6 col-sm-8 col-xs-12 text-end copyright-text wow animate__animated animate__fadeInRight">
                    <p class="text">&copy; Copyright 2024. All Rights Reserved. <a href="/"> Shreenandik
                            technologies. </a></p>
                </div>
            </div>
        </div>
    </div>

</footer>


<script src="public/lib/boostrap/jquery-min.js"></script>
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.13.2/jquery-ui.min.js"></script> -->
<script src="http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.6.2/modernizr.min.js"></script>
<script src="public/lib/carousel/owl.carousel.js"></script>
<script src="public/lib/boostrap/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="public/lib/slick/jquery.slicknav.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
<script src="public/assets/js/main.js"></script>
<!-- <script src="./public/assets/js/custom.js"></script> -->
<script type="text/javascript">

    // wow animation
new WOW().init({
    offset: 100,
});

// wow animaiton end



// back to top //
var amountScrolled = 200;
var amountScrolledNav = 25;


$(window).scroll(function() {
    if ($(window).scrollTop() > amountScrolled) {
        $('button.back-to-top').addClass('show');
    } else {
        $('button.back-to-top').removeClass('show');
    }
});

$('button.back-to-top').click(function() {
    $('html, body').animate({
        scrollTop: 0
    }, 800);
    return false;
});
// back to top //


// top scroll progress bar //
$(function() {
  // update on window scroll or resize
  $(window).on("resize scroll", function() {
    updateProgress(".progress");
  });
  
  function updateProgress(element) {
    var height = $(document).height() - $(window).height(),
        progress = $(window).scrollTop() / height;
    
    $(element).css("width", (progress * 100) + "%");
  }
  
});


// top scroll progress bar end //

</script>

</body>

</html>