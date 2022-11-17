<?php
include "../baglan.php";
								




if ($_POST) {


  $dizin ="../image/";
                          $yukkenecekResim = $dizin.@$_FILES['resim']['name'];

                             if ($_FILES['resim']['type'] == "image/png" || $_FILES['resim']['type'] == "image/jpg" || $_FILES['resim']['type'] == "image/jpeg" ) {



                                          if (move_uploaded_file(@$_FILES['resim']['tmp_name'], @$yukkenecekResim)) {
                            echo "basarili";


										$kartresim = $_POST['kartresim'];
										$kartbaslik = $_POST['kartbaslik'];
										$kartyazi = $_POST['kartyazi'];

										
										$query = $conn->prepare("INSERT INTO kartlar SET
							kart_resim = ?,
							kart_baslik = ?,
							kart_yazi = ?,
							kart_durum = ?");
							
							$insert = $query->execute(array(
							     $_FILES['resim']['name'], $kartbaslik, $kartyazi, 1
							));



								}

								if ($insert) {
									header("Location:kartekle.php?kartEkle=ok");
								}
								else {
									header("Location:kartekle.php?kartEkle = no");
								}


                          }else{
                            echo "asdsa";
                          }
}

									
								