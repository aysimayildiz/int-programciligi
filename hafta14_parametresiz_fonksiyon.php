<?php
// function rakamlar()
// {
//     echo "<b> parametresiz fonksiyon kullanımı</b>"."<br>";
//     for($rakam=0;$rakam<10;$rakam++)
//     {
//         echo $rakam."<br>";
//     }
// }
// rakamlar();


//parametreli fonksiyon
// function toplama_islemi($sayi1,$sayi2)
// {
//     echo "<b> parametreli fonksiyon kullanımız </b>"."<br>";
//     echo $sayi1+$sayi2."<br>";
// }
// toplama_islemi(10,30);

function carp($deger1,$deger2)
{
    echo "<b> Return ile sonuç döndürme</b>"."<br>";
    $sonuc=$deger1*$deger2;
    return $sonuc;
}
$hesapla=carp(5,6);
echo"çarpma işleminin sonucu: ".$hesapla;
?>