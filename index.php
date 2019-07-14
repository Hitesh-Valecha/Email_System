<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/html">
<!-- Head -->
<head>
    <title>CC Mini Project</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <!-- default-css-files -->
    <link href="css/bootstrap.css" rel='stylesheet' type='text/css'/>
    <link href="css/font-awesome.css" rel="stylesheet" type="text/css" media="all">
    <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen"/>
    <link rel="stylesheet" href="css/colorbox.css"/><!-- css for Gallery -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <!-- default-css-files -->
    <!-- Online fonts -->
    <link href="//fonts.googleapis.com/css?family=Dosis:300,400,500,600,700" rel="stylesheet">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <!-- //Online fonts -->
    <!-- style.css-file -->
    <link href="css/style.css" rel='stylesheet' type='text/css'/>
    <!-- //style.css-file -->

</head>
<!-- Head -->
<body>

<!--contacts-section-starts-here -->
<section class="contact" id="contact">
    <div class="container">
        <h3>contact us</h3>
        <div class=" agile-contact" align="center">
            <h6>send message</h6>
            <div class="contact-form">
                <form action="mail/mail.php" method="post">
                    <input type="text" placeholder="Enter Name" name="name" required="required">
                    <input type="email" placeholder="Enter Email " name="email" required="required">
                    <input type="text" placeholder="Enter Subject" name="subject" required="required">
                    <textarea type="text" placeholder="Enter Message" name="comment" required="required"></textarea>
                    <input type="submit" value="SEND">
                </form>
            </div>
        </div>
        <div class="agile-contact-grids text-center">

            <div class="information">
                <ul class="agile-inf">
                    <li><i class="fa fa-home" aria-hidden="true"></i>Vivekanand Education Society's Institute of Technology कलेक्टर कॉलोनी, Chembur East, Mumbai, Maharashtra
                    </li>
                </ul>
            </div>
            <div class="clearfix"></div>
        </div>
        <div class="cnt-line"></div>
        <div class="copy-left">
            <p class="footer-gd">© 2019 Hilarious Pvt. Ltd. Designed by Hitesh Valecha</p>
        </div>
    </div>
</section>

<!--contacts-section-end-here -->
<!-- Default-JavaScript-File -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<script src="js/jquery.vide.min.js"></script>
<!-- //Default-JavaScript-File -->
<script src="js/jquery.colorbox.js"></script>
<script>
    $(document).ready(function () {
        //Examples of how to assign the Colorbox event to elements
        $(".group1").colorbox({rel: 'group1'});
        $(".group2").colorbox({rel: 'group2', transition: "fade"});
        $(".group3").colorbox({rel: 'group3', transition: "none", width: "75%", height: "75%"});
        $(".group4").colorbox({rel: 'group4', slideshow: true});
        $(".ajax").colorbox();
        $(".youtube").colorbox({iframe: true, innerWidth: 640, innerHeight: 390});
        $(".vimeo").colorbox({iframe: true, innerWidth: 500, innerHeight: 409});
        $(".iframe").colorbox({iframe: true, width: "80%", height: "80%"});
        $(".inline").colorbox({inline: true, width: "50%"});
        $(".callbacks").colorbox({
            onOpen: function () {
                alert('onOpen: colorbox is about to open');
            },
            onLoad: function () {
                alert('onLoad: colorbox has started to load the targeted content');
            },
            onComplete: function () {
                alert('onComplete: colorbox has displayed the loaded content');
            },
            onCleanup: function () {
                alert('onCleanup: colorbox has begun the close process');
            },
            onClosed: function () {
                alert('onClosed: colorbox has completely closed');
            }
        });

        $('.non-retina').colorbox({rel: 'group5', transition: 'none'})
        $('.retina').colorbox({rel: 'group5', transition: 'none', retinaImage: true, retinaUrl: true});

        //Example of preserving a JavaScript event for inline calls.
        $("#click").click(function () {
            $('#click').css({
                "background-color": "#f00",
                "color": "#fff",
                "cursor": "inherit"
            }).text("Open this window again and this message will still be here.");
            return false;
        });
    });
</script>
<!-- FlexSlider -->
<script defer src="js/jquery.flexslider.js"></script>
<script type="text/javascript">
    $(function () {
    });
    $(window).load(function () {
        $('.flexslider').flexslider({
            animation: "slide",
            start: function (slider) {
                $('body').removeClass('loading');
            }
        });
    });
</script>
<!-- FlexSlider -->
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function ($) {
        $(".scroll").click(function (event) {
            event.preventDefault();
            $('html,body').animate({scrollTop: $(this.hash).offset().top}, 1000);
        });
    });
</script>
<!-- start-smoth-scrolling -->
<!-- Slide-To-Top JavaScript (No-Need-To-Change) -->
<script type="text/javascript">
    $(document).ready(function () {
        var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 100,
            easingType: 'linear'
        };
    });
</script>
<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 0;"> </span></a>
<!-- //Slide-To-Top JavaScript -->
<!-- jarallax scrolling -->
<script src="js/jarallax.js"></script>
<script src="js/SmoothScroll.min.js"></script>
<script type="text/javascript">
    /* init Jarallax */
    $('.jarallax').jarallax({
        speed: 0.5,
        imgWidth: 1366,
        imgHeight: 1000
    })
</script>
<!-- //jarallax scrolling -->
<!-- smooth scrolling -->
<script type="text/javascript">
    $(document).ready(function () {
        /*
            var defaults = {
            containerID: 'toTop', // fading element id
            containerHoverID: 'toTopHover', // fading element hover id
            scrollSpeed: 1200,
            easingType: 'linear'
            };
        */
        $().UItoTop({easingType: 'easeOutQuart'});
    });
</script>
<!-- //smooth scrolling -->
<script type="text/javascript" src="js/bootstrap-3.1.1.min.js"></script>
</body>
</html>