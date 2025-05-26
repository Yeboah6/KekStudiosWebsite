<!doctype html>
<html class="no-js" lang="zxx">
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>KEKStudios Official | @yield('title') </title>
    <meta name="description" content="KEKStudios: Your complete creative partner for brand identity design, web & mobile app development, UI/UX, commercial printing, event branding, and strategic marketing solutions. Transform your vision into powerful digital and print experiences.">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="../assets/img/loader1.png">

    <!-- CSS here -->
    <link rel="stylesheet" href="../assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="../assets/css/style.css">
    
</head>
<body>
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="../assets/img/loader1.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start -->

    @yield('content')

      <!-- Scroll Up -->
    <div id="back-top" >
        <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
    </div>
  
  <!-- JS here -->
  
  <script src="../assets/js/vendor/modernizr-3.5.0.min.js"></script>
  <!-- Jquery, Popper, Bootstrap -->
  <script src="../assets/js/vendor/jquery-1.12.4.min.js"></script>
  <script src="../assets/js/bootstrap.min.js"></script>
  <!-- Jquery Mobile Menu -->
  <script src="./assets/js/jquery.slicknav.min.js"></script>
  
  <!-- Jquery Plugins, main Jquery -->	
  <script src="../assets/js/plugins.js"></script>
  <script src="../assets/js/main.js"></script>
  
</body>
</html>