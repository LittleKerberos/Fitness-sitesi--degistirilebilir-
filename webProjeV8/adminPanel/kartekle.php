<?php
include "panelheader.php";
include "../baglan.php";





?>




 <?php if ($_GET): ?>
 <?php if ($_GET['kartEkle'] == "ok"): ?>
	<script>Swal.fire("Başarılı", "Kart Başarıyla Eklendi", "success"); </script>
<?php endif ?>
<?php endif ?>


  <div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Menü Ekleme</h4>

                    <h4 class="card-description"> kart Ekleme </h4><br><br>


          



                    <form class="forms-sample" action="kartEkleİslem.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Kart Resim</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="kartresim" value="image/" required>
                      </div>
                        <div class="form-group">
                        <label for="exampleInputUsername1">Kart Resim</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" placeholder="" name="resim" accept="image/png, image/jpeg ,image/jpg "  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kart Başlık</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="kartbaslik" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Kart Yazı</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="kartyazi" required>
                      </div>
                      
                      
                     <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>




            <?php
include "panelfooter.php";


?>
