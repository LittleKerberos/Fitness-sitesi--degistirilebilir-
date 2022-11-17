
<?php 

  include "baglan.php";


  $query = $conn->query("SELECT * FROM footer", PDO::FETCH_ASSOC);
 $query->rowCount();

 $vericek =  $query->fetch(PDO::FETCH_ASSOC); 

  $footer = $conn->query("SELECT * FROM ayar", PDO::FETCH_ASSOC);
 $footer->rowCount();

 $renk =  $footer->fetch(PDO::FETCH_ASSOC); 

?>


  <footer id="footer" style=" background: <?php echo $renk["footer_renk"];  ?>; color: <?php echo $renk["footer_yazi_renk"];  ?>;" >
    <div class="container" data-aos="fade-up"
     data-aos-anchor-placement="bottom-bottom" >
      <h3 style="color:<?php echo $renk["footer_yazi_renk"];  ?> "> <?php echo  $vericek['footer_baslik'] ;  ?></h3>
      <p><?php echo  $vericek['footer_yazi'] ;  ?></p>
      <div class="social-links">

<?php 

  $simge = $conn->query("SELECT * FROM simgeler WHERE durum = 1 order by sira", PDO::FETCH_ASSOC);
 $simge->rowCount();

 


while ($simgecek =  $simge->fetch(PDO::FETCH_ASSOC) ) { ?>
 


        <a href="#" class=""><i class="bx bxl-<?php echo $simgecek['sosyal_medya_isim']?>"></i></a> 

  <?php } ?>

  <br><br><br>
      <div class="copyright "  >
        © 1992 - 2022 Çanakkale Onsekiz Mart Üniversitesi <br>
        <?php echo  $vericek['footer_altyazi'] ;  ?>
      </div>
 
    </div>
  </footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>


  <script src="assets/vendor/aos/aos.js"></script>
  <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
  <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
  <script src="assets/vendor/php-email-form/validate.js"></script>

  
  <script src="assets/js/main.js"></script>

</body>

</html>