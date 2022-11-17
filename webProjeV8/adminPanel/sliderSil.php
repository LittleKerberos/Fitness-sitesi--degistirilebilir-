<?php 
include "../baglan.php";


if ($_GET) {
    
    $id= $_GET['id'];

    if (!$id) {
       echo"sadsa";
            }

    else

    {
        $sil= $conn->prepare("DELETE From slider where slider_id = :id");
        $sil->execute(array(':id' => $id)); 

            if ($sil) {
            	header("Location:slider.php?sliderSil=ok");

            }

    }
}

?>