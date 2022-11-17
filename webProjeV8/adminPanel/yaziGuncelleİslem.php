<?php include "../baglan.php";	

	
	
		//post kontrolü
		if ($_POST) {


  $dizin ="../image/";
                          $yukkenecekResim = $dizin.@$_FILES['resim']['name'];

   if ($_FILES['resim']['type'] == "image/png" || $_FILES['resim']['type'] == "image/jpg" || $_FILES['resim']['type'] == "image/jpeg" ) {



                                          if (move_uploaded_file(@$_FILES['resim']['tmp_name'], @$yukkenecekResim)) {
                            echo "basarili";
		$yaziresim = $_POST['yaziresim'];
		$id = $_POST['id'];
		$baslik = $_POST['baslik'];
		$yazi = $_POST['yazi'];
		$altyazi = $_POST['altyazi'];

		$sorgu = $conn->prepare("UPDATE anasayfa_yazi SET foto = :foto, baslik = :baslik , yazi = :yazi , alt_yazi = :alt_yazi WHERE id= :id");
   						$sorgu -> execute([':foto' => $_FILES['resim']['name'], ':baslik' => $baslik, ':yazi' => $yazi, ':alt_yazi' => $altyazi  ,':id' => $id  ]);
   						

    							if ($sorgu) {						
									header("Location:yaziliste.php?yaziGuncelle=ok");
								}
								else {
									header("Location:yaziliste.php?yaziGuncelle = no");
								}

                            
                          }else{
                            echo "asdsa";
                          }
}




		}
	

	






								

						
















    ?>