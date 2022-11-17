<?php
include "panelheader.php";
include "../baglan.php";





?>




 <?php if ($_GET): ?>
 <?php if ($_GET['yaziEkle'] == "ok"): ?>
	<script>Swal.fire("Başarılı", "Kart Başarıyla Eklendi", "success"); </script>
<?php endif ?>
<?php endif ?>


  <div class="row" style="margin-left: 10px;" >
              <div class="col-md-12 grid-margin stretch-card w-100">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Menü Ekleme</h4>

                    <h4 class="card-description"> Yazı Ekleme </h4><br><br>


          



                    <form class="forms-sample" action="yaziEkleİslem.php" method="POST" enctype="multipart/form-data">
                     
                        <input type="hidden" class="form-control" id="exampleInputUsername1" placeholder="" name="yaziresim" value="image/" required>
                      

                      <div class="form-group">
                        <label for="exampleInputUsername1">Yazı Resim</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" placeholder="" name="resim" accept="image/png, image/jpeg ,image/jpg " required>
                      </div>

                       <div class="form-group">
                        <label for="exampleInputUsername1">Yazı Başlığı</label>
                        <input type="text" class="form-control" placeholder="" name="baslik"  required> 
                      </div>
                    
                    
                      <div class="form-group">
                        <label for="exampleInputPassword1" rows="10" cols="500"> Yazı </label>
                        
                        <textarea class="form-control" name="yazi" required></textarea>

                      </div>
                         
                         <div class="form-group">
                        <label for="exampleInputPassword1"> Altyazı </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="altyazi" required>
                      </div>
                      
                      
                     <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>




            <?php
include "panelfooter.php";


?>
