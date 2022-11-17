 <?php 

include "baglan.php";


$query = $conn->query("SELECT * FROM hakkimizda", PDO::FETCH_ASSOC);
$query->rowCount();

$vericek =  $query->fetch(PDO::FETCH_ASSOC); 



?>
<?php    

include 'header.php';
?>







    <!-- ======= About Section ======= -->
    <section id="about" class="about">
      <div class="container">

        <div class="row justify-content-between">
          <div class="col-lg-5 d-flex align-items-center justify-content-center about-img">
            <img src="image/<?php echo $vericek['hakkimizda_resim']?>" style="height: 500px;" class="img-fluid" alt="" data-aos="zoom-in">
          </div>
          <div class="col-lg-6 pt-5 pt-lg-0">
            <h3><?php echo  $vericek['hakkimizda_baslik'] ;  ?></h3>
            <p><?php echo  $vericek['hakkimizda_yazi'] ;  ?></p>
            
                
                
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>








<?php
include 'footer.php';






?>