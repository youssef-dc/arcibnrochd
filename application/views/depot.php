<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>ARC IBNO ROCHD  | Deposition de xx</title>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/manual.css">
    <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owlcarousel/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/bootstrap-responsive.min.css">
    <!-- Google fonts Poppins -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
    <!-- Fontello -->
    <link rel="stylesheet" href="assets/css/css-fontello/animation.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-codes.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-embedded.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-ie7.css" type="text/css"/>
    <link rel="stylesheet" href="assets/css/css-fontello/fontello-ie7-codes.css" type="text/css"/>
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="assets/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="page">

    <!--=============================== Header ===========================-->
    <div id="header"></div>

    <!--=============================== Menu-Bar ========================-->
    <div id="menuBar-charity"></div>

    <!--=============================== Banner ==========================-->
    <div class="banner">
        <div class="shadow-main">
            <h1> Contact Us </h1>
            <ul class="breadcrumb breadcrumb-news">
                <li><a href="index.html">HOME</a></li>
                <li><a href="contact.html">CONTACT</a></li>
            </ul>
        </div>
    </div>

    <!--=============================== Contact ================================-->
    <div class="main-contact">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 mb-contact">
                    <ul class="contact">
                        <li>
                            <strong>Location</strong>
                            <span>Florida 123 6th St. Melbourne, FL 32904</span>
                        </li>
                        <li>
                            <strong>Work Hours</strong>
                            <span>Mon - Sat 10.00 - 18.00</span>
                        </li>
                        <li>
                            <strong>Phone</strong>
                            <span>800-879-6497, 321-879-8794</span>
                        </li>
                        <li>
                            <strong>Say Hello</strong>
                            <span>thx@yoursite.com</span>
                        </li>
                    </ul>
                    <div class="contact-social-link">
                        <ul>
                            <li><a href="https://www.tumblr.com/"><i class="icon-tumblr "></i></a></li>
                            <li><a href="https://www.facebook.com/"><i class="icon-facebook "></i></a></li>
                            <li><a href="https://www.pinterest.com/"><i class="icon-pinterest "></i></a></li>
                            <li><a href="https://vimeo.com/"><i class="icon-vimeo "></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-8 col-sm-6 col-xs-12">
                    <div class="leave-reply">
                        <form action="...">
                            <div class="form-group">
                                <input id="first_name" name="first_name" type="text" placeholder="Name"
                                       class="form-control" required="">
                            </div>
                            <div class="form-group">
                                <input id="email" name="email" type="email" placeholder="E-mail"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <input id="text" name="text" type="text" placeholder="Subject"
                                       class="form-control">
                            </div>
                            <div class="form-group">
                                <textarea class="form-control" rows="6" placeholder="Message..."></textarea>
                            </div>
                            <input class="red-btn red-btn-form" type="submit" value="Send Message">
                        </form>
                    </div>
                </div>
            </div>
        </div> <!--  /.container -->
    </div> <!--  /.main-contact -->

    <div class="overlay" onClick="style.pointerEvents='none'"></div>

    <div id="map"></div>

    <!--=============================== Footer ===========================-->
    <div id="footer"></div>

</div> <!--  /.page -->

<!-- JS code -->
<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
<script src="assets/js/jquery.spincrement.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script>
    "use strict";
        var marker;

        function initMap() {

            var myLatlng = {lat: 28.43465, lng: -80.69415};

            var map = new google.maps.Map(document.getElementById('map'), {
                zoom: 13,
                center: myLatlng
            });

            var iconBase = 'assets/images/location.png';

            marker = new google.maps.Marker({
                map: map,
                draggable: true,
                animation: google.maps.Animation.DROP,
                position: myLatlng,
                icon: iconBase
            });
            marker.addListener('click', toggleBounce);

            map.addListener('center_changed', function () {
                window.setTimeout(function () {
                    map.panTo(marker.getPosition());
                }, 3000);
            });

            marker.addListener('click', function () {
                map.setCenter(marker.getPosition());
            });

        }

        function toggleBounce() {
            if (marker.getAnimation() !== null) {
                marker.setAnimation(null);
            } else {
                marker.setAnimation(google.maps.Animation.BOUNCE);
            }
        }

</script>
<script async defer
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD4ppPTHXCpBSoOkLESSfwMlD1zojoMxBc&callback=initMap">
</script>
<script src="assets/js/myScript.js"></script>

</body>

</html>

