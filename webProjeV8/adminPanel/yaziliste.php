<?php
include "panelheader.php";
include "../baglan.php";

error_reporting(0);
?>


<?php if ($_GET['yaziGuncelle'] == "ok"): //güncelleme işleminden gönderilen cevaba göre bilidirm çıkardım   ?>
  <script>Swal.fire("Başarılı", "Kayıt Başarıyla Güncellendi", "success"); </script>
<?php endif ?>

<?php if ($_GET['yaziSil'] == "ok"): ?>
  <script>Swal.fire({
  icon: 'error',
  title: 'Yazı Silindi',

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
                            <th>Resim</th>
                            <th>Başlık</th>
                            <th>Yazı</th>
                            <th>Alt Yazı</th>
                            <th></th>
                            <th></th>
                          </tr>
                        </thead>
                         <tbody>

				<?php  

				$sorgu = $conn->query("SELECT * FROM anasayfa_yazi   ");
				
				while ($cikti = $sorgu->fetch(PDO::FETCH_ASSOC)) { ?>

							



		
                       
                          <tr>
                            <td><img src="../image/<?php echo $cikti['foto']; 	 ?>"></td>
                            <td><?php echo $cikti['baslik']; 	 ?></td>
                            <td><textarea cols="40" rows="15" disabled  class="form-control" style="color: white ; background-color: black;"><?php echo $cikti['yazi']; 	 ?></textarea></td>
                            <td><?php echo $cikti['alt_yazi']; 	 ?></td>

                            

                         <td><a style="text-decoration: none; color: white;" href="yaziguncelle.php?id=<?php echo $cikti['id'] ?>">  <button   type="button" class="btn btn-primary aw-zoom">Güncelle</button></a></td>
     						<td><a style="text-decoration: none; color: white;" href="yazisil.php?id=<?php echo $cikti['id'] ?>">  <button   type="button" class="btn btn-danger aw-zoom">Sİl</button></a></td>

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