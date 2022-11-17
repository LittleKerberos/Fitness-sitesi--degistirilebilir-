<?php
include "../baglan.php";

if ($_POST) {
	
	$logo = $_POST['logo'];
	$headerRenk = $_POST['headerRenk'];
	$headerYaziRenk = $_POST['headerYaziRenk'];
	$footerRenk = $_POST['footerRenk'];
	$footerYaziRenk = $_POST['footerYaziRenk'];
	$bgRenk = $_POST['bgRenk'];



		$sorgu = $conn->prepare("UPDATE ayar SET logo = :logo, header_renk = :headerRenk , header_yazi_renk = :headerYaziRenk , footer_renk = :footerRenk ,  footer_yazi_renk = :footerYaziRenk , bg_renk = :bgRenk  WHERE id= 1");
                   $sorgu -> execute([':logo' => $logo, ':headerRenk' => $headerRenk, ':headerYaziRenk' => $headerYaziRenk,':footerRenk' => $footerRenk ,':footerYaziRenk' => $footerYaziRenk, ':bgRenk' => 
                   	$bgRenk ]);

}

                        if ($sorgu) {
                            header("Location:ayar.php?Guncelle=ok");
                        }
                        else {
                            header("Location:ayar.php?Guncelle = no");
                        }







?>