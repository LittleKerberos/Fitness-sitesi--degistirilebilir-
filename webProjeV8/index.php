<?php 	 
 include "baglan.php";

include 'header.php';


  //kartlar tablosunu çekme
  $sorgu = $conn->query("SELECT * FROM kartlar where kart_durum  =1", PDO::FETCH_ASSOC);
 $sorgu->rowCount();

 $slider = $conn->query("SELECT * FROM slider where slider_durum  =1 and slider_sira !=1", PDO::FETCH_ASSOC);
 $slider->rowCount();
 $slider1 = $conn->query("SELECT * FROM slider where slider_durum  =1 and slider_sira =1", PDO::FETCH_ASSOC);
 $slider1->rowCount();

 

?>


<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
  
  <?php while ($vericek =  $slider1->fetch(PDO::FETCH_ASSOC) ) {  //bootsrapin active özelliğinin çalışması için sırası 1 olan resmi çektim ?>
    <div class="carousel-item  active">
      <img src="image/<?php echo $vericek['slider_resim'] ?>" class="d-block w-100" alt="..." style="height: 600px;">
    </div>

   
    <?php } ?>


    <?php while ($vericek =  $slider->fetch(PDO::FETCH_ASSOC) ) { //sırası 1 olmayanları çektim ?>
    <div class="carousel-item  ">
      <img src="image/<?php echo $vericek['slider_resim'] ?>" class="d-block w-100" alt="..." style="height: 600px;">
    </div>
    <?php } ?>
   
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

<div class="card-header" style="background-color:gray;">
                    <i class="fas fa-table"></i>
                   <center> <p style="font-family:Arial Black;">Size en uygun spor salonları, kaliteli ve eğitimli hocalarınız ile keyfini sürün </p><center>
                </div>






  <!-- Inner -->

  <!-- Controls -->

<!-- Carousel wrapper -->

  <section id="services">

   	<div class="row section-head">

      </div>

      <div class="row">

      	<div class="twelve columns">

	      	<div class="service-list bgrid-third s-bgrid-half mob-bgrid-whole">
		

				<div class="container">


  <div class="row">


<?php while ($vericek =  $sorgu->fetch(PDO::FETCH_ASSOC) ) { ?>

<div class="col-sm-4" data-aos="fade-down" data-aos-delay="1"  style="margin-bottom: 10px;">
      
  

      <div class="col-sm" >
       <div class="card" style="width: 18rem; border:groove;box-shadow:3px 3px 4px #000;" >
  <img class="card-img-top" src="image/<?php echo $vericek['kart_resim']; ?>" alt="Card image cap">
  <div class="card-body">
    <h5 class="card-title"><?php echo $vericek['kart_baslik']; ?></h5>
    <p class="card-text"><?php echo $vericek['kart_yazi']; ?></p>
   
  </div>
</div>
    </div>

   
    </div>

  <?php } ?>

  


    
   
  </div>
</div>
<br>

		

				

				 
	      	</div> <!-- /service-list -->

	      </div> <!-- /twelve -->

      </div> <!-- /row -->      

   </section> <!-- /services --> 
    <section id="services" class="services section-bg">
      <div class="container" data-aos="fade-up" >

        <div class="section-title">
          <h2>Services</h2>
          <p>Check out the great services we offer</p>
        </div>

        <div class="row">
          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="1" >
            <div class="icon-box">
              <div class="icon"><i class="bx bxl-dribbble"></i></div>
              <h4 class="title"><a href="">Lorem Ipsum</a></h4>
              <p class="description">Voluptatum deleniti atque corrupti quos dolores et quas molestias excepturi sint occaecati cupiditate</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="2">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-file"></i></div>
              <h4 class="title"><a href="">Sed ut perspiciatis</a></h4>
              <p class="description">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="3">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-tachometer"></i></div>
              <h4 class="title"><a href="">Magni Dolores</a></h4>
              <p class="description">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim</p>
            </div>
          </div>

          <div class="col-md-6 col-lg-3 d-flex align-items-stretch" data-aos="zoom-in" data-aos-delay="4">
            <div class="icon-box">
              <div class="icon"><i class="bx bx-world"></i></div>
              <h4 class="title"><a href="">Nemo Enim</a></h4>
              <p class="description">At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum</p>
            </div>
          </div>

        </div>

      </div>
    </section>
   


<section id="about" class="about">
    
         
                  <?php
                             //veritabanından çekme
                                          $anasayfa = $conn->query("SELECT * FROM anasayfa_yazi", PDO::FETCH_ASSOC);
                                           $anasayfa->rowCount();


                        //döngüde kullanılacak deeğer
                        $i = 0 ;

                        //veritabanını diziye aktarma
                while ($vericek =  $anasayfa->fetch(PDO::FETCH_ASSOC)) {

                   
                    //anasayfadaya fotoğraf eklendikçe biri sağa biri sola geçecek. i çift ise sağda tek ise solda olmalı. ifle hallettim bunu 
                   if ($i % 2 == 0): ?>
                                                 
                                                          <div class="container">

                                    <div class="row justify-content-between">
                                                      <div class="col-lg-6 pt-5 pt-lg-0">
                                        <h3 data-aos="fade-up"><?php echo $vericek['baslik']; ?></h3>
                                        <p data-aos="fade-up" data-aos-delay="100">
                                     <?php echo $vericek['yazi']; ?>
                                        </p>
                                        <div class="row">
                                          <div class="col-md-6" data-aos="fade-up" data-aos-delay="1">
                                            <i class="bx bx-receipt"></i>
                                           <?php echo $vericek['alt_yazi']; ?></p>
                                          </div>
                                          <div class="col-md-6" data-aos="fade-up" data-aos-delay="2">
                                            
                                            
                                          </div>
                                        </div>
                                      </div>
                                   <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" data-aos="zoom-in">
                                        <img src="image/<?php echo $vericek['foto']; ?>" style="height: 400px;" class="img-fluid" alt="" data-aos="zoom-in">
                                      </div>
                                    </div>
                                    <br><br><br>

                      
                 <?php endif ?>

                      <?php if ($i  %2  == 1): ?>


                                 <div class="row justify-content-between" >
                                          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img" >
                                            <img src="image/<?php echo $vericek['foto']; ?>" style="height: 400px;" class="img-fluid" alt="" data-aos="zoom-in">
                                          </div>
                                          <div class="col-lg-6 pt-5 pt-lg-0">
                                            <h3 data-aos="fade-up"><?php echo $vericek['baslik']; ?></h3>
                                            <p data-aos="fade-up" data-aos-delay="100">
                                            <?php echo $vericek['yazi']; ?>
                                            </p>
                                            <div class="row">
                                              <div class="col-md-6" data-aos="fade-up" data-aos-delay="1">
                                                <i class="bx bx-receipt"></i>
                                               <?php echo $vericek['alt_yazi']; ?></p>
                                              </div>
                                              <div class="col-md-6" data-aos="fade-up" data-aos-delay="2">
                                                
                                                
                                              </div>
                                            </div>
                                          </div>
                                        </div>

                                      </div>
                                <br>

                      
                 <?php endif ?>


                 




                

                  
              <?php //i değişkenine +1 ekleme kodu :)
                    $i++;  }

           

    ?>


        </div>

      </div>
    </section>
	<section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          
          

      </div>
    </section>











 

<?php
include 'footer.php';






?>