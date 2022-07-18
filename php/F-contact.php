<!DOCTYPE html>
<html lang="en">
<head>
    <!--/META DATA/-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="shortcut icon" type="image/png" href="../img/favicon.png"/>
    <title>H Robotics | Contact</title>
    <!--/STYLE/-->
    <link rel="stylesheet" href="../style/reset.css"> <!--/Reset Default Styles/-->
    <link rel="stylesheet" href="../style/normalize.css"> <!--/Cross Browser Consistency/-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway:300,400,700,900"> <!--/GoogeFont: Raleway/-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> <!--/Font-Awesome 4.7.0 min/-->
    <link rel="stylesheet" href="../style/main.css"> <!--/Customised Stylesheet/-->
    <link rel="stylesheet" href="../style/responsive.css"> <!--/Media Queries for Responsive Design/-->
    <link rel="stylesheet" href="../style/hero-slideshow.css"> <!--/Background Image Slideshow Animation/-->
</head>
<body id="contact" class="sticky-footer">
<div class="background-black-050-fixed"></div>

<!-- HEADER -->
<?php include 'X-header.php' ?>

<div class="container padding-top40 max-width1200 background-white">
    <div class="f-2row">
        <div class="form-wrap">
            <form id="form-message">
                    
                <label for="name">Name</label>
                <input type="text" name="name" id="name">
                
                <div class="margin-top20">
                <label for="email">Email</label>
                <input type="text" name="email" id="email">
                </div>
        
                <div class="margin-top20">
                <label for="company">Company</label>
                <input type="text" name="name" id="name">
                </div>
        
                <div class="margin-top20">
                <label for="name">Message</label>
                <input class="message" type="text" name="message" id="message">
                </div>
                <!-- 
                <textarea name="message" form="form-message">Enter text here...</textarea> -->
        
                <button class="margin-top20">Submit</button>
            </form> <!--/#form-message/-->
        </div><!--/.form-wrap/-->
        <div class="f-column f-start">
            <div class="contact-box">
                <div class="contact-address">
                    <h3>H Robotics Limited</h3>
                    <h3>20 Grosvenor Place</h3>
                    <h3>London SW1X 7HN</h3> 
                </div>
            </div><!--/.contact-box/-->
        
            <div class="google-maps margin-top20">
                <div id="map"></div>
            </div><!--/.google-maps/-->
    
            <div class="contact-contact margin-top20">
                <h3><i class="fa fa-phone" aria-hidden="true"></i> +44 207 245 1152</h3>
                <h3><i class="fa fa-skype" aria-hidden="true"></i> +44 203 289 8820</h3>
                <h3><i class="fa fa-envelope" aria-hidden="true"></i> info@hrobotics.co.uk</h3>
            </div><!--/.contact-contact/-->
        </div> <!--/.f-column/-->
    </div><!--/.f-2row/-->

</div> <!--/.container/-->

<!-- FOOTER -->
<?php include 'Z-footer.php' ?>


<!--/JS SCRIPT SECTION/-->
<script src="../script/contact.js"></script>

<!--/GOOGLE MAPS API/ -->
    <script>
        function initMap() {
            var uluru = {lat: 51.5002498, lng:-0.1492734};
            var map = new google.maps.Map(document.getElementById('map'), {
            zoom: 15,
            center: uluru
            });
            var marker = new google.maps.Marker({
            position: uluru,
            map: map
            });
        }
    </script>

<!--/SPECIAL KEY TO ENABLE GOOGLE API/-->
    <script async defer
    src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBP8Q5LS6V1KgOIv32zeXOTugWv7AUAv58&callback=initMap"></script>
</body>
</html>