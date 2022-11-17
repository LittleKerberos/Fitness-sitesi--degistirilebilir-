<?php
include "panelheader.php";
include "../baglan.php";
error_reporting(0);


$ayar = $conn->query("SELECT * FROM ayar", PDO::FETCH_ASSOC);
$ayar->rowCount();

$ayarCek =  $ayar->fetch(PDO::FETCH_ASSOC); 

?>


<?php if ($_GET['Guncelle'] == "ok"): ?>
	<script>Swal.fire("Başarılı", "Güncellendii", "success"); </script>
<?php endif ?>


  <div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Ayarlar</h4>

                    <h4 class="card-description"> Ayarlar </h4><br><br>


          



                    <form class="forms-sample" action="ayarİslem.php" method="POST">

                    <div class="form-group">
                        <label for="exampleInputUsername1">Logo Yazısı</label>
                        <br>
                        <input type="text" value="<?php echo $ayarCek['logo']; ?>" class="form-control"  placeholder="" name="logo" required >
                        
                      </div>


                      <div class="form-group">
                        <label for="exampleInputUsername1">Header Renk</label>
                        <br>

                        <input type="color" id="headerRenk" value="<?php echo $ayarCek['header_renk']; ?>" >
                        <br><br>
                        
                        
                        <input type="text" value="<?php echo $ayarCek['header_renk']; ?>" class="form-control" id="headerRenktxt" placeholder="" name="headerRenk" required >
                        
                      </div>
                      <div class="form-group">
                        <label for="exampleInputEmail1">Header Yazı Rengi</label>
                        <br>
                        <input type="color" id="headerYaziRenk" value="<?php echo $ayarCek['header_yazi_renk']; ?>">
                        <br> <br>
                        
                        
                        <input type="text"  value="<?php echo $ayarCek['header_yazi_renk']; ?>" class="form-control" id="headerYaziRenktxt" placeholder="" name="headerYaziRenk" required>


                      </div>
                      <div class="form-group">

                      <label for="exampleInputEmail1">Footerengi</label>
                        <br>
                        <input type="color" id="footerRenk" value="<?php echo $ayarCek['footer_renk']; ?>">
                        <br> <br>
                        
                        
                        <input type="text"  value="<?php echo $ayarCek['footer_renk']; ?>" class="form-control" id="footerRenktxt" placeholder="" name="footerRenk" required>



                      </div>


                      <div class="form-group">

                      <label for="exampleInputEmail1">Footer Yazı Rengi</label>
                        <br>
                        <input type="color" id="footerYaziRenk" value="<?php echo $ayarCek['footer_yazi_renk'];?>">
                        <br> <br>
                        
                        
                        <input type="text"  value="<?php echo $ayarCek['footer_yazi_renk']; ?>" class="form-control" id="footerYaziRenktxt" placeholder="" name="footerYaziRenk" required>



                      </div>


                       <div class="form-group">

                      <label for="exampleInputEmail1">Arkaplan Rengi</label>
                        <br>
                        <input type="color" id="bgRenk" value="<?php echo $ayarCek['bg_renk'];?>">
                        <br> <br>
                        
                        
                        <input type="text"  value="<?php echo $ayarCek['bg_renk']; ?>" class="form-control" id="bgRenktxt" placeholder="" name="bgRenk" required>



                      </div>
                      
                      
                     <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                      
                    </form>
                  </div>
                </div>
              </div>




              


    <script>


            var headerRenk = document.getElementById("headerRenk");
            var headerRenktxt = document.getElementById("headerRenktxt");
            
            headerRenk.addEventListener("input", function() {
                headerRenktxt.value = headerRenk.value;
                }, false); 




                var headerYaziRenk = document.getElementById("headerYaziRenk");
            var headerYaziRenktxt = document.getElementById("headerYaziRenktxt");
            
            headerYaziRenk.addEventListener("input", function() {
                headerYaziRenktxt.value = headerYaziRenk.value;
                }, false); 


                var footerRenk = document.getElementById("footerRenk");
            var footerRenktxt = document.getElementById("footerRenktxt");
            
            footerRenk.addEventListener("input", function() {
                footerRenktxt.value = footerRenk.value;
                }, false); 



                var footerYaziRenk = document.getElementById("footerYaziRenk");
            var footerYaziRenktxt = document.getElementById("footerYaziRenktxt");
            
            footerYaziRenk.addEventListener("input", function() {
                footerYaziRenktxt.value = footerYaziRenk.value;
                }, false); 


            var bgRenk = document.getElementById("bgRenk");
            var bgRenktxt = document.getElementById("bgRenktxt");
            
            bgRenk.addEventListener("input", function() {
                bgRenktxt.value = bgRenk.value;
                }, false); 
      


    </script>







<?php




include "panelfooter.php";


?>