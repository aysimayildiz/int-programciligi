<?php
include "hafta11veritabanibaglantilari.php";
//veritabanına exec kullanarak manuel veri ekleme
$kayit=$db->exec("INSERT INTO deneme SET 
id='4', ad='Gelişim', soyad='Üniversitesi'");
if($kayit)
{
    echo "kayıt işlemi başarılı";
}
else{
    echo" kayıt işlemi başarısız";
}
//veritabanına prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET 
id=?,
ad=?,
soyad=?,
");
$kayit=$sorgu->execute(array("15","aysm","yıldz"));
if($kayit)
{
    echo"kayıt işlemi başarılı";
}
else{
    echo "kayıt işlemi başarısız";
}
//veritabanına prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET 
id=:id,
ad=:ad,
soyad=:soyad
");
$kayit=$sorgu->execute(array(
"soyad"=>"yldz",
"id"=>"8",
"ad"=>"sima yldz"));
    if($kayit)
    {
    echo"Kayıt işlemi başarılı";
    }
    else
    {
echo"kayıt işlemi başarısız";
    }

?>