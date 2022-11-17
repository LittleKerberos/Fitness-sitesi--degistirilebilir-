<?php

include "../baglan.php";
include "panelheader.php";

//getle gelen idyi değişkene atadım
$id = $_GET['id'];
//gelen idye ait kaydı çektim
  $sorgu = $conn->query("SELECT * FROM menu where menu_id = $id ");
  $cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

?>







  <div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card" >
                <div class="card" >
                  <div class="card-body">
                    <h4 class="card-title" >Menü Ekleme</h4>

                    <h4 class="card-description"> Menü Güncelle </h4><br><br>


          



                    <form class="forms-sample" action="menuGuncelleİslem.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Menü Adı</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" value="<?php echo $cikti['menu_ad']; ?>" name="menuad" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Menü Link</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" value="<?php echo $cikti['menu_link']; ?>" name="menulink" required>
                      </div>
                      <div class="form-group">
                        <label for="exampleInputPassword1">Menü Sıra</label>
                        <input type="text" class="form-control" id="exampleInputPassword1" value="<?php echo $cikti['menu_sira']; ?>" name="menusira" required>
                      </div>


                       <div class="form-group " >
                        <label for="exampleInputPassword1">Menü Durum</label><br>
                         <input type="radio" class="form-check-input"  name="durum" id="membershipRadios2" value="1" style="margin-left:40px" 

                              <?php if ($cikti['menu_durum'] == "1") {
                                  
                                  //duruma göre radio seçili oluyor

                            echo ($cikti['menu_durum']== '1') ?  "checked" : "" ;  
                              }  ?>




                         > Aktif </label>
                     
                          <input type="hidden" name="eski" value="<?php echo $cikti['menu_sira']; ?>">
                       
                        <br>
                         <input type="radio" class="form-check-input" name="durum" id="membershipRadios2" value="0" style="margin-left:40px"

                                 <?php if ($cikti['menu_durum'] == "0") {
                                echo ($cikti['menu_durum']== '0') ?  "checked" : "" ;  
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

