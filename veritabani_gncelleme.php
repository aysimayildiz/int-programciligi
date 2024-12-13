<?php
include "hafta11veritabanibaglantilari.php";
$guncelle=$db->exec("UPDATE deneme SET adi='Özlem' WHERE soyad='yıldız'");
if($guncelle)
{
    echo"Güncelleme başarılı";

}
else{
    echo"güncelleme başarısız";
}
//veritabanına prepare ile güncelleme 
$sorgu=$db->prepare("UPDATE deneme SET 
ad=?,
soyad=?
");
$guncelle=$sorgu->execute(array("mehmet","demir"));
if ($guncelle)
{
 echo "güncelleme başarılı";
}
else{
    echo"güncelleme başarısız";
}

?>