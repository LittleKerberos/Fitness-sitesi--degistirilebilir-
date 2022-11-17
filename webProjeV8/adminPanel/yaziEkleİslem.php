<?php include "../baglan.php";	

  $dizin ="../image/";
                          $yukkenecekResim = $dizin.@$_FILES['resim']['name'];

   if ($_FILES['resim']['type'] == "image/png" || $_FILES['resim']['type'] == "image/jpg" || $_FILES['resim']['type'] == "image/jpeg" ) {



                                          if (move_uploaded_file(@$_FILES['resim']['tmp_name'], @$yukkenecekResim)) {
                            echo "basarili";
                          }else{
                            echo "asdsa";
                          }



		$resim = $_POST['yaziresim'];
		
		$yazi = $_POST['yazi'];
		

		$altyazi = $_POST['altyazi'];

		$baslik = $_POST['baslik'];

	


   										$query = $conn->prepare("INSERT INTO anasayfa_yazi SET
							foto = ?,
							baslik = ?,
							yazi = ?,
							alt_yazi = ?");
							
							$insert = $query->execute(array(
							     $_FILES['resim']['name'], $baslik, $yazi, $altyazi
							));



								

								if ($insert) {
									header("Location:yaziekle.php?yaziEkle=ok");
								}
								else {
									header("Location:yaziekle.php?yaziEkle = no");
								}
								


}		
		
