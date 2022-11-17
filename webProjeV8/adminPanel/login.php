<!DOCTYPE html>
<html lang="tr">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Admin - Girişi</title>

    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

    <link href="../css/sb-admin.css" rel="stylesheet">

</head>

<body class="bg-dark">
    
<?php
session_start(); //oturum başlattık
include("vt.php"); //veri tabanına bağlandık 


//hesap açıksa sayfaya gidiyoruyz
if (isset($_SESSION["Oturum"]) && $_SESSION["Oturum"] == "6789") {
    header("location:index.php");
} //eğer önceden beni hatırla işaretlenmiş ise oturum oluşturup sayfayı yönlendiriyoruz.
else if (isset($_COOKIE["cerez"])) {
    //Kullanıcı adlarını çeken kod

    $sorgu = $baglanti->prepare("select kadii from kullanici");
    $sorgu->execute();


    //Kullanıcı adlarını döngü yardımı ile tek tek elde ediyoruz
    while ($sonuc = $sorgu->fetch()) {
        //eğer bizim belirlediğimiz yapıya uygun kullanıcı var mı diye bakıyoruz.
        if ($_COOKIE["cerez"] == md5("aa" . $sonuc['kadii'] . "bb")) {

            //oturum oluşturma buradaki değerleri güvenlik açısından
            //farklı değerler yapabilirsiniz
            //aynı zamanda kullanıcı adınıda burada tuttum
            $_SESSION["Oturum"] = "6789";
            $_SESSION["kadii"] = $sonuc['kadii'];

            //sonrasında index sayfasına yönlendiriyorum
            header("location:index.php");
        }
    }
}
//Giriş formu doldurulmuşsa kontrol ediyoruz
if ($_POST) {
    $txtKadii = $_POST["txtKadii"]; //Kullanıcı adını değişkene atadık
    $txtParolaa = $_POST["txtParolaa"]; //Parolayı değişkene atadık
}
?>
<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Yönetici Girişi</div>
        <div class="card-body">
            <form id="form1" method="post">
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="text" name="txtKadii" value='<?php echo @$txtKadii ?>' id="inputKadii"
                               class="form-control"  required autofocus>
                        <label for="inputKadii">Kullanıcı Adı</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-label-group">
                        <input type="password" id="inputPassword" class="form-control" placeholder="Password" required
                               name="txtParolaa">
                        <label for="inputPassword">Parola</label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox" ID="ckbHatirla" name="ckbHatirla"/>
                            Beni hatırla
                        </label>
                        <br>
                        <?php
                        //Post varsa yani submit yapılmışsa veri tabanından kontrolü yapıyoruz.
                        if ($_POST) {
                            //sorguda kullanıcı adını alıp ona karşılık parola var mı diye bakıyoruz.
                            $sorgu = $baglanti->prepare("select parolaa from kullanici where kadii=:kadii");
                            $sorgu->execute(array('kadii' => htmlspecialchars($txtKadii)));
                            $sonuc = $sorgu->fetch();//sorgu çalıştırılıp veriler alınıyor

                            require_once "class.log.php";
                            $txt= $kullanicicek['kullanici_adsoyad'];
                            $log = new Log();
                            $log->add( $txt." Giriş YAPTI");
                            
                            //parolaları md5 ile şifreledim ve başına sonuna kendimce eklemeler yaptım.
                            if (md5("56" . $txtParolaa . "23") == $sonuc["parolaa"]) {
                                $_SESSION["Oturum"] = "6789"; //oturum oluşturma
                                $_SESSION["kadii"] = $txtKadii;

                                //eğer beni hatırla seçilmiş ise cookie oluşturuyoruz.
                                //cookie de şifreleyerek kullanıcı adından oluşturdum
                                if (isset($_POST["ckbHatirla"])) {
                                    setcookie("cerez", md5("aa" . $txtKadii . "bb"), time() + (60 * 60 * 24 * 7));
                                }
                                header("location:index.php"); //sayfa yönlendirme
                            } else {
                                //eğer kullanıcı adı ve parola doğru girilmemiş ise
                                //hata mesajı verdiriyoruz
                                echo "Kullanıcı adı veya parola yanlış!";
                            }
                        }
                        
                        ?>
                    </div>
                </div>

                <input type="submit" class="btn btn-primary btn-block" ID="btnGiris" value="Giriş"/>
            </form>

        </div>
    </div>
</div>


<script src="vendor/jquery/jquery.min.js"></script>
<script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>

</html>
