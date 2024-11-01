<?php
if(isset($_POST["kaydet"]))
{
    $adi=$_POST["ad"];
    $soyadi=$_POST["soyad"];
    $vize=$_POST["vize"];
    $final=$_POST["final"];
    $proje=$_POST["proje"];
    $ortalama=($vize*0.5)+($final*0.25)+($final*0.25);
    ($proje*0.25);
    echo " merhaba ".$adi." ".$soyadi." <br>"."Vize notun:".$vize."<br>"."Final notun:".$final."<br>"."proje notun:".$proje."<br>"."ortalaman:".$ortalama."<br>";
    if($ortalama>40 && $proje>=40)
    {
        echo "tebrikler ".$ortalama."ortalama ile dersi tamamladın";

    }
    else
    {
        echo"malesef ".$ortalama."ile dersten kaldın.";
    }
}
?>
