<?php
if(isset($_POST["hesapla"]))
{
    $kadi=$_POST["ad"];
    $ksoyadi=$_POST["soyad"];
    $yas=$_POST["dogumyili"];// parantez içindeki html name de belirttiğimiz
    $kboy=$_POST["boy"];
    $kkilo=$_POST["kilo"];
    $bki=$kkilo/($kboy*$kboy);
    echo"Merhaba".$kadi." ".$ksoyadi."<br>"."Yaşınız: ".$yas."<br>"."Beden kitle indeksi ölçüleriniz:".$bki."<br>";

if($bki<18)
{
    echo "zayıf kategorisindesiniz";

}
else if($bki>19 && $bki<25)
{
    echo "normal kategorisindesiniz";
}
else if($bki>26 && $bki<29)
{
    echo"aşırı kilolu kategorisindesiniz";
}
else
{
    echo"obez kategorisindesiniz";
}
}





?>