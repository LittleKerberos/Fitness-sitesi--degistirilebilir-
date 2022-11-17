<?php
include "panelheader.php";
include "../baglan.php";


?>

<?php if(@$_GET): ?>
<?php if (@$_GET['sliderEkle'] == "ok"): ?>
  <script>Swal.fire("Başarılı", "Slider Başarıyla Eklendi", "success"); </script>
<?php endif ?>

<?php if (@$_GET['sliderGuncelleİslem'] == "yes"): ?>
  <script>Swal.fire("Başarılı", "Slider Başarıyla Eklendi", "success"); </script>
<?php endif ?>

<?php if (@$_GET['sliderSil'] == "ok"): ?>
  <script>Swal.fire("Başarılı", "Slider Başarıyla Silindi", "success"); </script>
<?php endif ?>




<?php if (@$_GET['sliderGuncelle'] == "yes"): ?>
  <script>Swal.fire({
  icon: 'success',
  title: 'Slider Güncellendi',

}) </script>
<?php endif ?>
<?php endif ?>

										 <div class="row">

              <div class="col-lg-12 grid-margin stretch-card">

                <div class="card">

                  <div class="card-body">

                    <h4 class="card-title">Kart Listesi</h4>

                    <button style="margin-left: 500px; margin-top: 50px; " type="button" class="btn btn-success aw-zoom" data-toggle="modal" data-target="#sliderekle">
					 
					  <i class="fa-solid fa-sliders"></i><br>İkon Ekle

					</button>
                   
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>İkon</th>
                            <th>İkon Sıra</th>
                            
                            <th>ikon Durumu</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                         <tbody>

				<?php  

				$sorgu = $conn->query("SELECT * FROM simgeler order by sira ");
				
				while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

							



		
                       
                          <tr>
                            <td>	 <a href="#" class=""><i class="bx bxl-<?php echo $cikti['sosyal_medya_isim'];   ?>"></i></a> 	</td>
                            <td><?php echo $cikti['sira']; 	 ?></td>
                            

                            

                         <td><a style="text-decoration: none; color: white;" href="sliderguncelle.php?id=<?php echo $cikti['id'] ?>">  <button   type="button" class="btn btn-primary aw-zoom" >Güncelle</button></a></td>
     						<td><a style="text-decoration: none; color: white;" href="sliderSil.php?id=<?php echo $cikti['id'] ?>">  <button   type="button" class="btn btn-danger aw-zoom">Sİl</button></a></td>

                          </tr>

                     <?php } ?>      
                         
                      </table>
                    </div>
                  </div>
                </div>
              </div>








<?php
include "panelfooter.php";


?>


<div class="modal fade" id="sliderekle" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Slider Ekle</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        
      		 <div class="row" style="margin-left: 10px;">
              <div class="col-md-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    

                    <h4 class="card-description"> Slider Ekleme </h4><br><br>


          



                    <form class="forms-sample" action="sliderEkleİslem.php" method="POST">
                      <div class="form-group">
                        <label for="exampleInputUsername1">Slider Resim</label>
                        <input type="text" class="form-control" id="exampleInputUsername1" placeholder="" name="sliderresim" value="image/" required>
                      </div>
                 
                     
                      
                       <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-success mr-2">Kaydet</button>
                     
                      
                    </form>
                  </div>
                </div>
              </div>





      </div>
      <div class="modal-footer">
       
      </div>
    </div>
  </div>
</div>



