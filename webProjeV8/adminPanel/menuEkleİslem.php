<?php
include "../baglan.php";
								

								//postla veri geliyor mu diye kontrol yaptım
								if ($_POST) {
										
										//gelen verileri değişkene atadım
										$menuad = $_POST['menuad'];
										$menulink = $_POST['menulink'];
										$menusira = $_POST['menusira'];

										
										$query = $conn->prepare("INSERT INTO menu SET
							menu_ad = ?,
							menu_link = ?,
							menu_sira = ?,
							menu_durum = ?");
							$insert = $query->execute(array(
							     $menuad, $menulink, $menusira, 1
							));



								}

								if ($insert) {					//eğer sorgu çalıştıysa bir önceki sayfaya ok mesajını gönderiyor
									header("Location:menuekle.php?menuEkle=ok");
								}
								else {
									header("Location:menuekle.php?menuEkle = no");
								}
								