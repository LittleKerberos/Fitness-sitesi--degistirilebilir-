
<?php 
include "../baglan.php";


if ($_GET) {
    
    $id= $_GET['id'];

    if (!$id) {
       echo"sadsa";
            }

    else

    {
        $sil= $conn->prepare("DELETE From kartlar where kart_id = :id");
        $sil->execute(array(':id' => $id)); 

            if ($sil) {
            	header("Location:kartliste.php?kartSil=ok");

            }

    }
}

?>