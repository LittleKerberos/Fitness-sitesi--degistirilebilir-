<?php
include "panelheader.php";
include "../baglan.php";

error_reporting(0);
?>

<?php if($_GET): ?>
<?php if ($_GET['kartGuncelle'] == "ok"): ?>
  <script>Swal.fire("Başarılı", "Kayıt Başarıyla Güncellendi", "success"); </script>
<?php endif ?>
<?php if ($_GET['kartGuncelle'] == "no"): ?>
  <script>Swal.fire("Başarılı", "Kayıt Başarıyla Güncellendi", "success"); </script>
<?php endif ?>




<?php if ($_GET['kartSil'] == "ok"): ?>
  <script>Swal.fire({
  icon: 'error',
  title: 'Kayıt Silindi',

}) </script>
<?php endif ?>
<?php endif ?>

										 <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Kart Listesi</h4>
                   
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Kart Resmi</th>
                            <th>Kart Başlığı</th>
                            <th>Kart Yazısı</th>
                            <th>Kart Durumu</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                         <tbody>

				<?php  

				$sorgu = $conn->query("SELECT * FROM kartlar  ");
				
				while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

							



		
                       
                          <tr>
                            <td>	<img src="../image/<?php echo $cikti['kart_resim']; 	 ?>">		</td>
                            <td><?php echo $cikti['kart_baslik']; 	 ?></td>
                            <td><?php echo $cikti['kart_yazi']; 	 ?></td>

                            <?php if( $cikti['kart_durum']  == 1): ?>
                            <td><a style="text-decoration: none; color: white;" href="kartGuncelleİslem.php?id=<?php echo $cikti['kart_id'] ?>    ">  <button   type="button" class="btn btn-success aw-zoom">Aktif</button></a> </td>
                        <?php endif ?>
                          <?php if( $cikti['kart_durum']  == 0): ?>
                            <td><a style="text-decoration: none; color: white;" href="kartGuncelleİslem.php?id=<?php echo $cikti['kart_id'] ?>    ">  <button   type="button" class="btn btn-danger aw-zoom">Pasif</button></a> </td>
                        <?php endif ?>

                         <td><a style="text-decoration: none; color: white;" href="kartguncelle.php?id=<?php echo $cikti['kart_id'] ?>">  <button   type="button" class="btn btn-primary aw-zoom">Güncelle</button></a></td>
     						<td><a style="text-decoration: none; color: white;" href="kartSil.php?id=<?php echo $cikti['kart_id'] ?>">  <button   type="button" class="btn btn-danger aw-zoom">Sil</button></a></td>

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