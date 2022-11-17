<?php
include "../baglan.php";

$query = $conn->prepare("SELECT MAX(slider_sira) FROM `slider`  ");

//Sorgumuzu çalıştırıyoruz
$query->execute();
$result=$query->fetch(PDO::FETCH_ASSOC);
								if ($_POST) {
										



									 $dizin ="../image/";
                          $yukkenecekResim = $dizin.@$_FILES['resim']['name'];

                          echo $yukkenecekResim.'<br>';
                                           if (move_uploaded_file(@$_FILES['resim']['tmp_name'], @$yukkenecekResim)) {
                            echo "basarili";
                          }else{
                            echo "asdsa";
                          }


										$sliderresim = $_POST['sliderresim'];
										
										echo $_FILES['resim']['name'];

										
										$query = $conn->prepare("INSERT INTO slider SET
							slider_resim = ?,
							slider_sira = ?
							");
							
							$insert = $query->execute(array(
							     $_FILES['resim']['name'], $result['MAX(slider_sira)']+1
							));



								}

								if ($insert) {
									header("Location:slider.php?sliderEkle=ok");
								}
								else {
									header("Location:slider.php?sliderEkle = no");
								}
								