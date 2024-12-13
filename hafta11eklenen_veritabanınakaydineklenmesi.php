<?php
include "hafta11veritabanibaglantilari.php";
$kayit=$db->exec("INSERT INTO deneme SET id='10', ad='Yunus',soyad='demir'");
if($kayit)
{
    echo"kayıt gerçekleştirildi. ID değeri: ".$db->lastInsertId();
}
?>