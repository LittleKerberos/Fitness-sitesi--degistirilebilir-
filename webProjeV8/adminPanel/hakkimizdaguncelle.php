<?php
include "panelheader.php";
include "../baglan.php";

$query = $conn->query("SELECT * FROM hakkimizda", PDO::FETCH_ASSOC);
 $query->rowCount();

 $vericek =  $query->fetch(PDO::FETCH_ASSOC)

?>
<?php if ($_GET): ?>
 <?php if ($_GET['hakkimizdaGuncelle'] == "ok"): ?>
    <script>Swal.fire("Başarılı", "Başarıyla Güncellendi", "success"); </script>
<?php endif ?>



<?php endif ?>

<?php if ($_GET): ?>
 <?php if ($_GET['hakkimizdaGuncelle'] == "no"): ?>
    <script>Swal.fire("Başarısız", "İstenen Doya Türlerini Yükleyin", "error"); </script>
<?php endif ?>



<?php endif ?>


<div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <h4 class="card-description"> Hakkımızda Güncelleme </h4><br><br>


          
                    

                    <form class="forms-sample" action="hakkimizdaİslem.php" method="POST" enctype="multipart/form-data">
                        <input type="hidden" name = "hakkimizda_id" value="<?php echo $vericek['hakkimizda_id']?>">

                         
                          <div class="form-group">
                        <label for="exampleInputUsername1">Hakkımızda Resim</label>
                        <input type="file" class="form-control" id="exampleInputUsername1" placeholder="" name="resim" value="<?php echo $vericek['hakkimizda_resim']?>" required>
                      </div>

                     <!--  <div class="form-group">
                        <label for="exampleInputUsername1">Hakkımızda Resim</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="hakkimizda_resim" value="<?php echo $vericek['hakkimizda_resim']?>" required>
                      </div> -->

                      <div class="form-group">
                        <label for="exampleInputEmail1">Hakkımızda Başlık</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="hakkimizda_baslik" value="<?php echo $vericek['hakkimizda_baslik']?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Hakkımızda Yazı</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="hakkimizda_yazi" value="<?php echo $vericek['hakkimizda_yazi']?>" required>
                      </div>
                      
                      
                     <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>

           

<?php
include "panelfooter.php";


?>