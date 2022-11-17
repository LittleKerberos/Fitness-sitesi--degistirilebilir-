<?php include "../baglan.php";	

	
	

	if ($_POST) {

			$yazi = $_POST['kartyazi'];
		$id = $_POST['id'];
		$resim = $_POST['kartresim'];
		$baslik = $_POST['kartbaslik'];
		$durum = $_POST['durum'];

	

 $dizin ="../image/";
                          $yukkenecekResim = $dizin.@$_FILES['resim']['name'];

   if ($_FILES['resim']['type'] == "image/png" || $_FILES['resim']['type'] == "image/jpg" || $_FILES['resim']['type'] == "image/jpeg" ) {



                                          if (move_uploaded_file(@$_FILES['resim']['tmp_name'], @$yukkenecekResim)) {

                                          	$sorgu = $conn->prepare("UPDATE kartlar SET kart_resim = :kart_resim, kart_baslik = :kart_baslik , kart_yazi = :kart_yazi , kart_durum = :kart_durum WHERE kart_id= :id");
   						$sorgu -> execute([':kart_resim' => $_FILES['resim']['name'], ':kart_baslik' => $baslik, ':kart_yazi' => $yazi, ':kart_durum' => $durum  ,':id' => $id  ]);


    							if ($sorgu) {
									header("Location:kartliste.php?kartGuncelle=ok");
								}
								else {
									header("Location:kartliste.php?kartGuncelle=ok");
								}

                                          }
}



	
	}






   							if ($_GET['id']) 
   						{
   								$id = $_GET['id'];
   								$sorgu = $conn->query("SELECT * FROM kartlar Where kart_id = $id ");
   								$cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

   							
   							if ($cikti['kart_durum'] == 1) {
   								$durumupdate = $conn->prepare("UPDATE kartlar SET  kart_durum = false WHERE kart_id= :id");
   								$durumupdate -> execute([':id' => $id  ]);
   							}
   							elseif($cikti['kart_durum'] == 0){
   								$durumupdate = $conn->prepare("UPDATE kartlar SET  kart_durum = true WHERE kart_id= :id");
   								$durumupdate -> execute([':id' => $id ]);
   							}
   							
   						}






									if ($durumupdate) {
									header("Location:kartliste.php?kartGuncelle=ok");
								}
								else {
									header("Location:kartliste.php?kartGuncelle=no");
								}

								