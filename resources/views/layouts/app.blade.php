<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN"
 "http://www.w3.org/TR/html4/strict.dtd">
<html lang="en">

<head>
    <meta name="google-site-verification" content="Ii6yb8DHsz6kC33k2rsJrd8rBSLaLs8-SUWms6zu8ao" />
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
   
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Korba</title>
    <link rel="icon" type="image/png" sizes="32x32" href="/img/logo/list_icon.png">
    <!-- Basic SEO -->
    <meta name="description" content="Korba365">
    <meta name="keywords" content="Korba">
    <!-- Font Awesome -->
    <link rel="stylesheet" type="text/css" href="css/font-awesome/css/font-awesome.min.css">
    <!-- Bootsrap css -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
    {{-- <link rel="stylesheet" type="text/css" href="css/bootstrap/bootstrap.css"> --}}
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Owl Carousel -->
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.carousel.min.css">
    <link rel="stylesheet" type="text/css" href="css/owl-carousel/owl.theme.default.min.css">

    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:400,500" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Raleway:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Merriweather" rel="stylesheet">
    
    
    <!-- Responsive tabs -->
    <link rel="stylesheet" type="text/css" href="css/responsive-tabs/responsive-tabs.css">
    <!-- Animate css -->
    <link rel="stylesheet" type="text/css" href="css/animate/animate.css">

    <!-- Lightbox css -->
    <link rel="stylesheet" type="text/css" href="css/lightbox.css">

    <!-- <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous"> -->
    <!-- Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <!-- Responsive CSS -->
    <link rel="stylesheet" type="text/css" href="css/responsive.css">
</head>

<body>
    <!-- loads before main website content finishes loading -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    <!-- Header menu section -->
    @include('inc.header')
    
    @include('inc.sidemenu')
    
    @yield('content')

   
</body>
 <!-- Footer section -->
 @include('inc.footer')
 <!-- JQuery library -->
 {{-- <script type="text/javascript" src="js/jquery.js"  ></script> --}}
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 {{-- <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/2.0.5/waypoints.min.js"></script>
 {{-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script> --}}
 <!-- Bootsrap JS -->
 {{-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script> 
  --}}
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  {{-- <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script>

 {{-- <script type="text/javascript" src="js/bootstrap/bootstrap.js"></script> --}}
 <!-- Wow Js -->
 {{-- <script type="text/javascript" src="js/wow/wow.min.js"></script> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js" integrity="sha512-Eak/29OTpb36LLo2r47IpVzPBLXnAMPAVypbSZiZ4Qkf8p/7S/XRG5xp7OKWPPYfJT6metI+IORkR5G8F900+g==" crossorigin="anonymous"></script>
 <!-- Owl Carousel Js -->
 {{-- <script type="text/javascript" src="js/owl-carousel/owl.carousel.min.js"></script> --}}
 <script src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js" integrity="sha512-9CWGXFSJ+/X0LWzSRCZFsOPhSfm6jbnL+Mpqo0o8Ke2SYr8rCTqb4/wGm+9n13HtDE1NQpAEOrMecDZw4FXQGg==" crossorigin="anonymous"></script>
   <!-- Lightbox js -->
 <link rel="stylesheet" type="text/javascript" href="js/lightbox.js">
 {{-- <script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.3/js/lightbox.min.js" integrity="sha512-k2GFCTbp9rQU412BStrcD/rlwv1PYec9SNrkbQlo6RZCf75l6KcC3UwDY8H5n5hl4v77IDtIPwOk9Dqjs/mMBQ==" crossorigin="anonymous"></script> --}}
 <!-- Responsive tabs -->
 <!-- <script type="text/javascript" src="js/responsive-tabs/jquery.responsiveTabs.min.js"></script> -->
 <!-- Custom js -->
 <script type="text/javascript" src="js/script.js"></script>

 <!--Start of Tawk.to Script-->
 <script type="text/javascript">
     var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
     (function(){
     var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
     s1.async=true;
     s1.src='https://embed.tawk.to/5d7789e177aa790be3335394/default';
     s1.charset='UTF-8';
     s1.setAttribute('crossorigin','*');
     s0.parentNode.insertBefore(s1,s0);
     })();
     </script>
     <!--End of Tawk.to Script-->
</html>