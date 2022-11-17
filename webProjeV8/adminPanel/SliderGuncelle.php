<?php

include "../baglan.php";
include "panelheader.php";

if ($_GET) {
  $id = $_GET['id'];
  $sorgu = $conn->query("SELECT * FROM slider where slider_id = $id ");
  $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

}

?>


<?php if (@$_GET['guncelle'] == "no"): ?>
  <script>Swal.fire({
  icon: 'error',
  title: 'Slider Güncellenemedi ',
  footer : 'İstenilen Formatta Dosya Yükleyin'

}) </script>
<?php endif ?>




  <div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card" >
                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title" >Menü Ekleme</h4>

                    <h4 class="card-description"> Slider Güncelle </h4><br><br>


          



                    <form class="forms-sample" action="sliderGuncelleİslem.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Şimdiki Slider Foroğraf</label><br>
                        <img src="../image/<?php echo $cikti['slider_resim']; ?>"style="width: 100px; height: 100px; margin-top: 20px;" ><br><br>
                        <!-- <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $cikti['slider_resim']; ?>" name="slider_resim" required> -->

                        <input type="file" name="resim">
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Slider Sırası</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $cikti['slider_sira']; ?>" name="slider_sira" required>
                      </div>
                   

                       <div class="form-group " >
                        <label for="exampleInputPassword1">Slider Durum</label><br>
                        
                         <input type="radio" class="form-check-input" name="slider_durum" id="membershipRadios2" value="1" style="margin-left:40px" 

                              <?php if ($cikti['slider_durum'] == "1") {
                            echo ($cikti['slider_durum']== '1') ?  "checked" : "" ;  
                              }  ?>




                         > Aktif </label>
                     

                       
                        <br>
                         <input type="radio" class="form-check-input" name="slider_durum" id="membershipRadios2" value="0" style="margin-left:40px"

                                 <?php if ($cikti['slider_durum'] == "0") {
                                echo ($cikti['slider_durum']== '0') ?  "checked" : "" ;  
                              }  ?>

                         > Pasif </label>
                      </div>


                       <input type="hidden" name="id" value="<?php echo $id ?>">
                       <input type="hidden" name="eski" value="<?php echo $cikti['slider_sira']; ?>">
                      
                      
                     <button type="submit" class="btn btn-warning mr-2" >Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>,


            <?php
include "panelfooter.php";


?>
