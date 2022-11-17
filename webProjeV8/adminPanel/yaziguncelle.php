<?php
include "panelheader.php";
include "../baglan.php";



$id = $_GET['id'];
//gelen idye ait kaydı çektim
  $sorgu = $conn->query("SELECT * FROM anasayfa_yazi where id = $id ");
  $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

?>







  <div class="row" style="margin-left: 10px;" >
              <div class="col-md-12 grid-margin stretch-card w-100">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Menü Ekleme</h4>

                    <h4 class="card-description"> Yazı Güncelle </h4><br><br>


          



                    <form class="forms-sample " action="yaziGuncelleİslem.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group "  style="height: auto;">
                        <label for="exampleInputUsername1">Yazı Resim</label><br><br>
                        <img src="../image/<?php echo $cikti['foto']; ?>" style="width: 90px; height: 90px;"><br><br>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="yaziresim" value="<?php echo $cikti['foto']; ?>" required>
                         <input type="file" class="form-control" id="exampleInputUsername1" placeholder="" name="resim" accept="image/png, image/jpeg ,image/jpg " required>
                      </div>

                       <div class="form-group">
                        <label for="exampleInputUsername1">Yazı Başlığı</label>
                        <input type="text" class="form-control" placeholder="" name="baslik"  required value="<?php echo $cikti['baslik']; ?>"> 
                      </div>
                    
                    
                      <div class="form-group">
                        <label for="exampleInputPassword1" rows="30" cols="500"> Yazı </label>
                        
                        <textarea class="form-control" name="yazi" required><?php echo $cikti['yazi']; ?></textarea>

                      </div>
                         
                         <div class="form-group">
                        <label for="exampleInputPassword1"> Altyazı </label>
                        <input type="text" class="form-control" id="exampleInputPassword1" placeholder="" name="altyazi" required value="<?php echo $cikti['alt_yazi']; ?>">
                      </div>
                      <input type="hidden" name="id" value="<?php echo $id ?>">
                      
                     <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>




            <?php
include "panelfooter.php";


?>
