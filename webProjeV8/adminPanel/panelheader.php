<?php
session_start(); 

//eğer mevcut oturum varsa sayfayı yönlendiriyoruz.
if (!(isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789")) {
    header("location:login.php");
}
?>
<!DOCTYPE html>
<html lang="tr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Ege fitnes Admin</title>
       <script src="https://kit.fontawesome.com/973ced5fb6.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="shortcut icon" href="assets/images/favicon.png" />
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="@sweetalert2/themes/dark/dark.css">
      <script src="sweetalert2/dist/sweetalert2.min.js"></script>
      <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
      <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
      <link rel="stylesheet" href="fonta/css/fontawesome.css" />
      <script src="https://kit.fontawesome.com/973ced5fb6.js" crossorigin="anonymous"></script>
      <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
     

<link href="//cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
  </head>
  <body>
    <div class="container-scroller" >
      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar"  >
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="index.html"><img src="assets/images/logo.svg" alt="logo" /></a>
          <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
        </div>
        <ul class="nav">
          <li class="nav-item profile">
            <div class="profile-desc">
              <div class="profile-pic">
                <div class="count-indicator">
                  <img class="img-xs rounded-circle " src="assets/images/faces/face15.jpg" alt="">
                  <span class="count bg-success"></span>
                </div>
                <div class="profile-name">
                  <h5 class="mb-0 font-weight-normal">Oğuzhan Altıntaş</h5>
                  <span>Altın avcısı</span>
                </div>
              </div>
              
            </div>
          </li>
          <li class="nav-item nav-category">
            <span class="nav-link">Yönlendirme</span>
          </li>
          
          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-menu"></i>
              </span>
              <span class="menu-title">Menüler</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="ui-basic">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="menuekle.php"   >Menü Ekle</a></li>
                <li class="nav-item"> <a class="nav-link" href="menuliste.php">Menü Düzenle</a></li>
                
              </ul>
            </div>
          </li>

             <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#kart" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-animation"></i>
              </span>
              <span class="menu-title">Kartlar</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="kart">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="kartekle.php"   >Kart Ekle</a></li>
                <li class="nav-item"> <a class="nav-link" href="kartliste.php">Kart Düzenle</a></li>
                
              </ul>
            </div>
          </li>

           <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#anayazi" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-comment-text-outline"></i>
              </span>
              <span class="menu-title ">Anasayfa Yazıları</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="anayazi">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="yaziekle.php"   >Yazı Ekle</a></li>
                <li class="nav-item"> <a class="nav-link" href="yaziliste.php">Yazı Düzenle</a></li>
                
              </ul>
            </div>
          </li>

           <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#slider" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-view-carousel"></i>
              </span>
              <span class="menu-title ">Slider</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="slider">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="slider.php">Slider İşlemleri</a></li>
                
           
                
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#renk" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-view-carousel"></i>
              </span>
              <span class="menu-title ">Görünüm Ayarları</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="renk">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="ayar.php">Ayarlar</a></li>
                
           
                
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#hakkımızda" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-view-carousel"></i>
              </span>
              <span class="menu-title ">Hakkımızda</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="hakkımızda">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="hakkimizdaguncelle.php">Hakkımızda Güncelle</a></li>
                
           
                
              </ul>
            </div>
          </li>

          <li class="nav-item menu-items">
            <a class="nav-link" data-toggle="collapse" href="#iletişim" aria-expanded="false" aria-controls="ui-basic">
              <span class="menu-icon">
                <i class="mdi mdi-camera-front-variant"></i>
              </span>
              <span class="menu-title ">İletiişim</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="iletişim">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="iletisimguncelle.php">İletişim Güncelle</a></li>
                
           
                
              </ul>
            </div>
          </li>


         
        </ul>
      </nav>
      <!-- partial -->
      <div class="container-fluid page-body-wrapper">
        <!-- partial:partials/_navbar.html -->
        <nav class="navbar p-0 fixed-top d-flex flex-row">
          <div class="navbar-brand-wrapper d-flex d-lg-none align-items-center justify-content-center">
            <a class="navbar-brand brand-logo-mini" href="index.php"><img src="assets/images/logo-mini.svg" alt="logo" /></a>
          </div>
          <div class="navbar-menu-wrapper flex-grow d-flex align-items-stretch">
            <ul class="navbar-nav navbar-nav-right">
                    
              
              <li class="nav-item dropdown">
                <a class="nav-link" id="profileDropdown" href="#" data-toggle="dropdown">
                  <div class="navbar-profile">
                    <img class="img-xs rounded-circle" src="assets/images/faces/face15.jpg" alt="">
                    <p class="mb-0 d-none d-sm-block navbar-profile-name">Henry Klein</p>
                    <i class="mdi mdi-menu-down d-none d-sm-block"></i>
                  </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right navbar-dropdown preview-list" aria-labelledby="profileDropdown">
                  <h6 class="p-3 mb-0">Profile</h6>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item preview-item" href="logout.php">
                    <div class="preview-thumbnail">
                      <div class="preview-icon bg-dark rounded-circle">
                        <i class="mdi mdi-logout text-danger"></i>
                      </div>
                    </div>
                    <div class="preview-item-content">
                      <p class="preview-subject mb-1" >Log out</p>
                    </div>
                  </a>
                </div>
              </li>
            </ul>
            <button class="navbar-toggler navbar-toggler-right d-lg-none align-self-center" type="button" data-toggle="offcanvas">
              <span class="mdi mdi-format-line-spacing"></span>
            </button>
          </div>
        </nav>
