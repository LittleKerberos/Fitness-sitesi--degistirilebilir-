<?php
include "../baglan.php";


if ($_POST) {
    $id = $_POST['id'];
$baslik = $_POST['baslik'];
$adres = $_POST['adres'];
$konum = $_POST['konum'];
$email = $_POST['email'];
$mail_detay = $_POST['mail_detay'];
$telefon = $_POST['telefon'];
$telefon_detay = $_POST['telefon_detay'];
$harita_link = $_POST['harita_link'];




$sorgu = $conn->prepare("UPDATE iletisim SET baslik = :baslik, adres = :adres , konum = :konum , email = :email , mail_detay = :mail_detay , telefon = :telefon , telefon_detay = :telefon_detay , harita_link = :harita_link   WHERE id= :id");
                   $sorgu -> execute([

                    ':baslik' => $baslik,
                    ':adres' => $adres,
                     ':konum' => $konum,
                     ':email' => $email,

                     ':id' => $id,
                     ':mail_detay' => $mail_detay,
                     ':telefon' => $telefon,
                     ':telefon_detay' => $telefon_detay,
                     ':harita_link' => $harita_link






                       ]);

}

                        if ($sorgu) {
                            header("Location:iletisimguncelle.php?hakkimizdaGuncelle=ok");
                        }
                        else {
                            header("Location:iletisimguncelle.php?hakkimizdaGuncelle = no");
                        }
                        
?>