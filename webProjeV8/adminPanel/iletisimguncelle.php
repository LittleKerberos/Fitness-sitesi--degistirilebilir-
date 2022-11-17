<?php
include "panelheader.php";
include "../baglan.php";

$query = $conn->query("SELECT * FROM iletisim", PDO::FETCH_ASSOC);
 $query->rowCount();

 $vericek =  $query->fetch(PDO::FETCH_ASSOC)

?>
<?php if ($_GET): ?>
 <?php if ($_GET['hakkimizdaGuncelle'] == "ok"): ?>
    <script>Swal.fire("Başarılı", "Başarıyla Güncellendi", "success"); </script>
<?php endif ?>
<?php endif ?>
<div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">

                    <h4 class="card-description"> İletişim Güncelleme </h4><br><br>


          



                    <form class="forms-sample" action="iletisimGuncelleİslem.php" method="POST">
                        <input type="hidden" name = "id" value="<?php echo $vericek['id']?>">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Başlık </label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="baslik" value="<?php echo $vericek['baslik']?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Adres</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" placeholder="" name="adres" value="<?php echo $vericek['adres']?>" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Konum</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="konum" value="<?php echo $vericek['konum']?>" required>
                      </div>
                       <div class="form-group">
                        <label for="exampleInputPassword1">Email</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="email" value="<?php echo $vericek['email']?>" required>
                      </div>

                        <div class="form-group">
                        <label for="exampleInputPassword1">Email Detay</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="mail_detay" value="<?php echo $vericek['mail_detay']?>" required>
                      </div>
                        <div class="form-group">
                        <label for="exampleInputPassword1">Telefon</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="telefon" value="<?php echo $vericek['telefon']?>" required>
                      </div>

                           <div class="form-group">
                        <label for="exampleInputPassword1">Telefon Detay</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="telefon_detay" value="<?php echo $vericek['telefon_detay']?>" required>
                      </div>
                      
                            <div class="form-group">
                        <label for="exampleInputPassword1">Harita Linki</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="harita_link" value="<?php echo $vericek['harita_link']?>" required>
                      </div>
                      
                      
                      
                      
                      
                     <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>
<?php
include "panelfooter.php";


?>