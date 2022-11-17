<?php 	 

include "baglan.php";
include 'header.php';


  


  $sorgu = $conn->query("SELECT * FROM iletisim", PDO::FETCH_ASSOC);
  $sorgu->rowCount();

 $iletisim =  $sorgu->fetch(PDO::FETCH_ASSOC) 

?>


<br>
<br>
<br>



  <section id="contact" class="contact">
      <div class="container">

        <div class="section-title" data-aos="zoom-out">
          
          <p><?php echo $iletisim['baslik'] ; ?></p>
        </div>

        <div class="row mt-5">

          <div class="col-lg-4" data-aos="fade-right">
            <div class="info">
              <div class="address">
                <i class="bi bi-geo-alt"></i>
                <h4><?php echo $iletisim['adres'] ; ?></h4>
                <p><?php echo $iletisim['konum'] ; ?></p>
              </div>

              <div class="email">
                <i class="bi bi-envelope"></i>
                <h4><?php echo $iletisim['email'] ; ?></h4>
                <p><?php echo $iletisim['mail_detay'] ; ?></p>
              </div>

              <div class="phone">
             <i class="bi bi-phone"></i>
                <h4><?php echo $iletisim['telefon'] ; ?></h4>
                <p><?php echo $iletisim['telefon_detay'] ; ?></p>
              </div>

            </div>

          </div>

          <div class="col-lg-8 mt-5 mt-lg-0" data-aos="fade-left">

            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Ad" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Konu" required>
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="5" placeholder="Mesaj" required></textarea>
              </div>
        
              <div class="text-center"><button type="submit">Mesaj Gönder</button></div>
            </form>

          </div>

        </div>

      </div>
    </section> 

<iframe src="<?php echo $iletisim['harita_link'] ; ?>" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" data-aos="zoom-out" data-aos="fade-left"></iframe>



<br>

 

<?php
include 'footer.php';






?>