<?php
/*
// while döngüsü ile 1 den 10 a kadar yazdır.
$sayi=1;
while($sayi<10)
{
    echo"Sayı: ".$sayi."<br>";
    $sayi++;
}



// while döngüsü ile 1 den 10 a kadar sayıları toplama 
$sayi=1;
$toplam=$sayi;
echo $sayi;
while($sayi<10){
   $sayi++;
   $toplam+=$sayi;
   echo "+".$sayi;
}
echo "=".$toplam;



// do while  döngüsü ile 5 defa ad yazdırma
$sayi=1;
do
{
    echo $sayi."- AYSİMA YILDIZ"."<br>";
    $sayi++;
}
while($sayi<=5);





$sayi=30;
$a=1;
do{
    if($sayi%$a==0)
    {
        echo $a." sayısı ".$sayi." sayısının bir bölenidir."."<br>";
    }
    $a++;
}
 while($a<=$sayi);





//foreach döngüsü ile haftanın günlerini yazma -foreach sadece dizilerde kullanılır.-
 $gunler=array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
foreach($gunler as $gun)
{
    echo $gun."<br>";
}



// kalın ve ince ünlüler foreach örnek 
 $kalinveİnceUnluler=array("a","ı","o","u","e","i","ö","ü");
 echo" Alfabedeki Kalın ve İnce Ünlüler Listesi"."<br>";
 foreach($kalinveİnceUnluler as $alfabe=>$sira)
 {
    echo $alfabe. ":".$sira."<br>";
 }





//for döngüsü 
for ($i=0;$i<=10;$i++)
{
    echo "<b> Gelişim üniversitesi</b><u>Web Tasarımı ve Kodlama Programı</u>"."<br>";
}
*/
?>


$toplam=0;
echo "1 ve 100 arasındaki sayılardan hem 2'ye hem de 5'e bölünen <br> sayıları listeleme ve toplam sonucunu bulalım."."<br>";
for($i=1; $i<=100;$i++)
{
    
    if ($i%2==0 && $i%5==0)
     {
        echo $i."<br>";
        $toplam=$toplam+$i;
     }
}
echo "<b>Toplam sonucu: </b>".$toplam;
?>


