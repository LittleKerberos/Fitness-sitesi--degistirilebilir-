<?php
include "panelheader.php";
include "../baglan.php";

error_reporting(0);
?>


<?php if ($_GET['menuGuncelle'] == "ok"): //güncelleme işleminden gönderilen cevaba göre bilidirm çıkardım   ?>
  <script>Swal.fire("Başarılı", "Kayıt Başarıyla Güncellendi", "success"); </script>
<?php endif ?>

<?php if ($_GET['menuSil'] == "ok"): ?>
  <script>Swal.fire({
  icon: 'error',
  title: 'Kayıt Silindi',

}) </script>
<?php endif ?>


										 <div class="row">
              <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title">Menü Listesi</h4>
                   
                    <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>Menü Adı</th>
                            <th>Menü Linki</th>
                            <th>Menü Sırası</th>
                            <th>Menü Durumu</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                         <tbody>

				<?php  

				$sorgu = $conn->query("SELECT * FROM menu  ORDER BY menu_sira ");
				
				while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

							



		
                       
                          <tr>
                            <td><?php echo $cikti['menu_ad']; 	 ?></td>
                            <td><?php echo $cikti['menu_link']; 	 ?></td>
                            <td><?php echo $cikti['menu_sira']; 	 ?></td>

                            <?php if( $cikti['menu_durum']  == 1): ?>


                            <td>    <a style="text-decoration: none; color: white;" href="menuGuncelleİslem.php?id=<?php echo $cikti['menu_id'] ?> ">  <button   type="button" class="btn btn-success aw-zoom">Aktif</button></a>       </td>
                        

                        <?php endif ?>


                          <?php if( $cikti['menu_durum']  == 0): ?>

                           <td>     <a style="text-decoration: none; color: white;" href="menuGuncelleİslem.php?id=<?php echo $cikti['menu_id'] ?>    ">  <button   type="button" class="btn btn-danger aw-zoom">Pasif</button></a>         </td> 
                        <?php endif ?>

                         <td><a style="text-decoration: none; color: white;" href="menuguncelle.php?id=<?php echo $cikti['menu_id'] ?>">  <button   type="button" class="btn btn-primary aw-zoom">Güncelle</button></a></td>
     						<td><a style="text-decoration: none; color: white;" href="menusil.php?id=<?php echo $cikti['menu_id'] ?>">  <button   type="button" class="btn btn-danger aw-zoom">Sİl</button></a></td>

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