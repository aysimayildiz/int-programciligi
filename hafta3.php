<?php /*
echo "isset($AdiSoyadi)";
?>

<?php
echo "isset($AdiSoyadi)"."<br>";
$AdiSoyadi="Aysima Yıldız";
echo"isset($AdiSoyadi)";
?>

<?php
$degisken="Gelişim üniversitesi";
echo $degisken."<br>";
unset($degisken);
//değişkenin içini değiştirmeyi yok etmeyi sağlar
echo $degisken;
//bu çıktı da değişkenin içinde değer yok hatası alınır.
?>



//doğum yılı hesaplama
$yil=2024;
$d_yil=2004;
$yas=$yil-$d_yil;
echo "Benim Yaşım " .$yas;
?>


//basit hesap makinesi 
$sayi1=35;
$sayi2=5;
$toplam=$sayi1+$sayi2;
$cikar=$sayi1-$sayi2;
$carp=$sayi1*$sayi2;
$bol=$sayi1/$sayi2;
$mod=$sayi1%$sayi2;
$us=$sayi1**$sayi2;

echo "1.sayının değeri: ".$sayi1."<br>".
"2.sayının değeri: ".$sayi2."<br>".
"toplama işlemi sonucu ".$toplam."<br>".
"çıkarma işlemi sonucu ".$cikar."<br>".
"çarpma işlemi sonucu ".$carp."<br>".
"bölme işlemi sonucu ".$bol."<br>".
"mod alma işlemi sonucu ".$mod."<br>".
"üs alma işlemi sonucu ".$us."<br>";

?>


//artırma azaltma operatörleri
 
$sayi=15;
echo "<u> yazmış olduğumuz sayının değeri:</u>".$sayi."<br>".
"sayının değerini artırma işlemi: ".++$sayi."<br>". 
"sayının değerini azaltma işlemi: ".--$sayi;
*/

?>
