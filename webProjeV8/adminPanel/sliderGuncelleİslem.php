<?php include "../baglan.php";	

	
	
		//post kontrolü
		if ($_POST) {
				$slider_resim = $_POST['slider_resim'];
		$id = $_POST['id'];
		$slider_sira = $_POST['slider_sira'];
		$slider_durum = $_POST['slider_durum'];
		$eski = $_POST['eski'];


 if ($_FILES['resim']['type'] == "image/png" || $_FILES['resim']['type'] == "image/jpg" || $_FILES['resim']['type'] == "image/jpeg" ) {


		 $dizin ="../image/";
                          $yukkenecekResim = $dizin.@$_FILES['resim']['name'];

                          echo $yukkenecekResim.'<br>';
                                           if (move_uploaded_file(@$_FILES['resim']['tmp_name'], @$yukkenecekResim)) {
                            echo "basarili";
                          }else{
                            echo "asdsa";
                          }



						  $sorgu1 = $conn->prepare("UPDATE slider SET  slider_sira = ? WHERE slider_sira = ?");
    $sorgu1->bindParam(1, $eski, PDO::PARAM_INT);
    $sorgu1->bindParam(2, $slider_sira, PDO::PARAM_INT);
     $sorgu1->execute();



		$sorgu = $conn->prepare("UPDATE slider SET slider_resim = :slider_resim, slider_sira = :slider_sira , slider_durum = :slider_durum  WHERE slider_id= :id");
   						$sorgu -> execute([':slider_resim' => $_FILES['resim']['name'], ':slider_sira' => $slider_sira, ':slider_durum' => $slider_durum, ':id' => $id  ]);

   							if ($sorgu) {						
									header("Location:slider.php?sliderGuncelleİslem=yes");
								}
								else {
									header("Location:slider.php?sliderGuncelleİslem=yes");
								}





 }else{
 	header("Location:sliderGuncelle.php?id=".$id."&guncelle=no");
 }

							



   		//$sira = $conn->prepare("UPDATE menu SET  menu_sira = :menu_sira WHERE menu_sira = :eski");
   						//$sira -> execute([ ':eski' => $eski , ':eski' => $sira  ]);
   																									
   						

   		




		}
	

	




							//getle veri geldi mi diye konrol 
   						if ($_GET) 
   						{		
   								//gelen idye ait kaydı çekim
   								$id = $_GET['id'];
   								$sorgu = $conn->query("SELECT * FROM slider Where slider_id = $id ");
   								$cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

   								//kaydın durumuna göre güncelleme yaptırdım
   							if ($cikti['slider_durum'] == 1) {
   								$durumupdate = $conn->prepare("UPDATE slider SET  slider_durum = false WHERE slider_id= :id");
   								$durumupdate -> execute([':id' => $id  ]);
   								if ($durumupdate) {
									header("Location:slider.php?sliderGuncelle=yes");
								}
								else {
								header("Location:slider.php?sliderGuncelle = no");
								}

   							}
   							elseif($cikti['slider_durum'] == 0){
   								$durumupdate = $conn->prepare("UPDATE slider SET  slider_durum = true WHERE slider_id= :id");
   								$durumupdate -> execute([':id' => $id ]);

   								if ($durumupdate) {
									header("Location:slider.php?sliderGuncelle=yes");
								}
								else {
								header("Location:slider.php?sliderGuncelle = no");
								}

   							}
   							
   						}



    														

								
















    ?>