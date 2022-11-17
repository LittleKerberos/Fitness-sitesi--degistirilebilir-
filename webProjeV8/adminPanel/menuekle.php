<?php
include "panelheader.php";
include "../baglan.php";
error_reporting(0);
?>


<?php if ($_GET['menuEkle'] == "ok"): ?>
	<script>Swal.fire("Başarılı", "Kayıt Başarıyla Eklendi", "success"); </script>
<?php endif ?>


  <div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Menü Ekleme</h4>

                    <h4 class="card-description"> Menü Ekleme </h4><br><br>


          



                    <form class="forms-sample" action="menuEkleİslem.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Menü Adı</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="menuad" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Menü Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="menulink" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Menü Sıra</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="menusira" required>
                      </div>
                      
                      
                     <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>












<?php




include "panelfooter.php";


?>