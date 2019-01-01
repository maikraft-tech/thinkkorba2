<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Think Korba</title>
    <!-- Basic SEO -->
    <meta name="description" content="creative website development with HTML5,css,bootstrap and jquery">
    <meta name="keywords" content="HTML5,CSS3,JQuery,Bootstrap, Web Design, Web Development, Responsive website, Korba">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <!-- Bootsrap css -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css">

    <!-- <link rel="stylesheet" type="text/css" href="css/onepage-scroll.css"> -->
    
    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.theme.default.min.css">
    <!-- Responsive tabs -->
    <link rel="stylesheet" type="text/css" href="css/responsive-tabs/responsive-tabs.css">
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate/animate.css">
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <!-- loads before main website content finishes loading -->
    <!-- <div id="preloader">
        <div id="status">&nbsp;</div>
    </div> -->
    <!-- Header menu section -->
    @include('inc.custom_header')
    
    @include('inc.sidemenu')
    
    @yield('content')

    <!-- Footer section -->
    @include('inc.footer')
    <!-- JQuery library -->
    <!-- <script type="text/javascript" src="js/jquery.js"></script> -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <!-- Bootsrap JS -->
    <!-- <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>

    <script type="text/javascript" src="js/jquery.onepage-scroll.min.js"></script>

    <!-- Wow Js -->
    <script type="text/javascript" src="js/wow/wow.min.js"></script>
    <!-- Owl Carousel Js -->
  	<script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script>
    <!-- Responsive tabs -->
    <script type="text/javascript" src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script>
    <!-- Custom js -->
    <script type="text/javascript" src="js/script1.js"></script>
    @stack('scripts')

<!-- this is the chat plugin -->
    <!--Start of Tawk.to Script-->
    <script type="text/javascript">
        var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
        (function(){
        var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
        s1.async=true;
        s1.src='https://embed.tawk.to/5bdbe4a58cf925451c51c412/default';
        s1.charset='UTF-8';
        s1.setAttribute('crossorigin','*');
        s0.parentNode.insertBefore(s1,s0);
        })();
    </script>
    <!--End of Tawk.to Script-->
</body>

</html>