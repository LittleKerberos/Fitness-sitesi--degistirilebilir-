<?php 
include "../baglan.php";


if ($_GET) {
    
    $id= $_GET['id'];

    if (!$id) {
       echo"sadsa";
            }

    else

    {
        $sil= $conn->prepare("DELETE From anasayfa_yazi where id = :id");
        $sil->execute(array(':id' => $id)); 

            if ($sil) {
            	header("Location:yaziliste.php?yaziSil=ok");

            }

    }
}

?>