<?php
include "../baglan.php";


if ($_POST) {


  $dizin ="../image/";
                          $yukkenecekResim = $dizin.@$_FILES['resim']['name'];

                             if ($_FILES['resim']['type'] == "image/png" || $_FILES['resim']['type'] == "image/jpg" || $_FILES['resim']['type'] == "image/jpeg" ) {



                                          if (move_uploaded_file(@$_FILES['resim']['tmp_name'], @$yukkenecekResim)) {
                            echo "basarili";
                          }else{
                            echo "asdsa";
                          }

  
                     


$id = $_POST['hakkimizda_id'];
$resim = $_POST['hakkimizda_resim'];
$baslik = $_POST['hakkimizda_baslik'];
$yazi = $_POST['hakkimizda_yazi'];



$sorgu = $conn->prepare("UPDATE hakkimizda SET hakkimizda_resim = :hakkimizda_resim, hakkimizda_baslik = :hakkimizda_baslik , hakkimizda_yazi = :hakkimizda_yazi WHERE hakkimizda_id= :hakkimizda_id");
                   $sorgu -> execute([':hakkimizda_resim' => $_FILES['resim']['name'], ':hakkimizda_baslik' => $baslik, ':hakkimizda_yazi' => $yazi,':hakkimizda_id' => $id  ]);


                      }else {
                          header("Location:hakkimizdaguncelle.php?hakkimizdaGuncelle = no");
                      }
                          
                

}

                        if ($sorgu) {
                            header("Location:hakkimizdaguncelle.php?hakkimizdaGuncelle=ok");
                        }
                        else {
                            header("Location:hakkimizdaguncelle.php?hakkimizdaGuncelle=no");
                        }
                        
?>