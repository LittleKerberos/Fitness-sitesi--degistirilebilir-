<?php

include "../baglan.php";
include "panelheader.php";

$id = $_GET['id'];
  $sorgu = $conn->query("SELECT * FROM kartlar where kart_id = $id ");
  $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

?>







  <div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card" >
                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title" >Menü Ekleme</h4>

                    <h4 class="card-description"> Kart Güncelle </h4><br><br>


          



                    <form class="forms-sample" action="kartGuncelleİslem.php" method="POST" enctype="multipart/form-data">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Kart Foroğraf</label>
                        <img src="../image/<?php echo $cikti['kart_resim']; ?>"style="width: 100px; height: 100px; margin-top: 20px;" >
                        <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $cikti['kart_resim']; ?>" name="kartresim" required>
                      </div>
                       <div class="form-group">
                        <label for="exampleInputUsername1">Kart Foroğraf</label>
                       
                         <input type="file" class="form-control" id="exampleInputUsername1" placeholder="" name="resim" accept="image/png, image/jpeg ,image/jpg "  required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Kart başlığı</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $cikti['kart_baslik']; ?>" name="kartbaslik" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Kart Yazı</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $cikti['kart_yazi']; ?>" name="kartyazi" required>
                      </div>

                       <div class="form-group " >
                        <label for="exampleInputPassword1">Kart Durum</label><br>
                         <input type="radio" class="form-check-input" name="durum" id="membershipRadios2" value="1" style="margin-left:40px" 

                              <?php if ($cikti['kart_durum'] == "1") {
                            echo ($cikti['kart_durum']== '1') ?  "checked" : "" ;  
                              }  ?>




                         > Aktif </label>
                     

                       
                        <br>
                         <input type="radio" class="form-check-input" name="durum" id="membershipRadios2" value="0" style="margin-left:40px"

                                 <?php if ($cikti['kart_durum'] == "0") {
                                echo ($cikti['kart_durum']== '0') ?  "checked" : "" ;  
                              }  ?>

                         > Pasif </label>
                      </div>


                       <input type="hidden" name="id" value="<?php echo $id ?>">
                      
                      
                     <button type="submit" class="btn btn-warning mr-2" >Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>,


            <?php
include "panelfooter.php";


?>
