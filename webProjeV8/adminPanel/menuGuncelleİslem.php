<?php include "../baglan.php";	

	
	
		//post kontrolü
		if ($_POST) {
				$ad = $_POST['menuad'];
		$id = $_POST['id'];
		$link = $_POST['menulink'];
		$sira = $_POST['menusira'];
		$durum = $_POST['durum'];
		$eski = $_POST['eski'];

						  $sorgu1 = $conn->prepare("UPDATE menu SET  menu_sira = ? WHERE menu_sira = ?");
    $sorgu1->bindParam(1, $eski, PDO::PARAM_INT);
    $sorgu1->bindParam(2, $sira, PDO::PARAM_INT);
     $sorgu1->execute();

		

		$sorgu = $conn->prepare("UPDATE menu SET menu_ad = :menu_ad, menu_link = :menu_link , menu_sira = :menu_sira , menu_durum = :menu_durum WHERE menu_id= :id");
   						$sorgu -> execute([':menu_ad' => $ad, ':menu_link' => $link, ':menu_sira' => $sira, ':menu_durum' => $durum  ,':id' => $id  ]);


   		//$sira = $conn->prepare("UPDATE menu SET  menu_sira = :menu_sira WHERE menu_sira = :eski");
   						//$sira -> execute([ ':eski' => $eski , ':eski' => $sira  ]);
   																									
   						

   		




		}
	

	




							//getle veri geldi mi diye konrol 
   						if ($_GET['id']) 
   						{		
   								//gelen idye ait kaydı çekim
   								$id = $_GET['id'];
   								$sorgu = $conn->query("SELECT * FROM menu Where menu_id = $id ");
   								$cikti = $sorgu->fetch(PDO::FETCH_ASSOC);

   								//kaydın durumuna göre güncelleme yaptırdım
   							if ($cikti['menu_durum'] == 1) {
   								$durumupdate = $conn->prepare("UPDATE menu SET  menu_durum = false WHERE menu_id= :id");
   								$durumupdate -> execute([':id' => $id  ]);
   							}
   							elseif($cikti['menu_durum'] == 0){
   								$durumupdate = $conn->prepare("UPDATE menu SET  menu_durum = true WHERE menu_id= :id");
   								$durumupdate -> execute([':id' => $id ]);
   							}
   							
   						}



    							if ($sorgu) {						
									header("Location:menuliste.php?menuGuncelle=ok");
								}
								else {
									header("Location:menuliste.php?menuGuncelle = no");
								}
								

								if ($durumupdate) {
									header("Location:menuliste.php?menuGuncelle=ok");
								}
								else {
								header("Location:menuliste.php?menuGuncelle = no");
								}

















    ?>