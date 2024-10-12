

<?php
/*$ad="Aysima";
$soyad="yıldız";
echo $ad." ".$soyad;
?>

<?php
$degisken=true;
$degisken2=3;
$degisken3=5.6;
//$degisken4="Aysima";
//$degisken5=array("red","blue","yellow");
$degisken6=new stdClass;
$degisken7=NULL;
$degisken8="30";
echo gettype($degisken)."<br>".
    gettype($degisken2)."<br>".
    gettype($degisken3)."<br>".
    //gettype($degisken4)."<br>".
    //gettype($degisken5)."<br>".
    gettype($degisken6)."<br>".
     gettype($degisken7)."<br>".
    gettype($degisken8)."<br>";

?>

<?php
$sayi=55;
echo"<b> birinci değişkenin adı:
\$sayi</b>"."<br>".
"değeri:".$sayi."<br>". 
"türü:" .gettype($sayi)."<br>";
?>

<?php
$adi="Aysima";
echo"<b> ikinci değişkenin adı:
\$adi</b>"."<br>". 
"değeri:".$adi."<br>". 
"türü:" .gettype($adi)."<br>";

?>
<?php
$ondalik="5.1234";
echo"<b> üçüncü değişkenin adı:
\$ondalik</b>"."<br>". 
"değeri:".$ondalik."<br>". 
"türü:" .gettype($ondalik)."<br>";

//settype dönüşümleri
$a="32";
settype($a,"integer");
var_dump($a);
echo gettype($a)."<br>";

$b="32";
settype($b,"string");
var_dump($b);
echo gettype($b)."<br>";

$c=true;
settype($c,"integer");
var_dump($c);
echo gettype($c)."<br>";


*/
//php sabitleri

echo"<h2>PHP SABİTLERİ</h2>"."<br>". 
"kodun bulunduğu yer:".(__LINE__)."<br>". 
"dosyanın bulunduğu yer:".(__FILE__)."<br>". 
"sunucudaki PHP versiyonu:".phpversion()."<br>". 
"sunucudaki işletim sistemi:".(PHP_OS)."<br>". 
"dosyanın bulunduğu dizin :".(__DIR__);
?>




