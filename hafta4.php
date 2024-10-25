
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>hafta 4 </title> 
</head>
<body>
    <h3>Sayının pozitif negatiflik ve tek çift olma durumu</h3>
    <form name="form" action="" method="post">
Sayı Giriniz:<input type="text" name="sayi">
<input type="submit" name="kontrol" value="Kontrol Et">
</form>
</body>
</html>

<?php
//tek çift sayı kontrol
if(isset($_POST["kontrol"]))
{
    $sayi=$_POST["sayi"];
    if($sayi>0 && $sayi%2==0)
    {
        echo"sayı hem pozitif hemde çifttir.";
    }
    else if($sayi>0 && $sayi%2==1)
    {
        echo "say hem pozitif hem de tektir.";
    }
    else if($sayi<0 && $sayi%2==0)
    {
        echo " sayı hem negatif hem de çifttir.";
    }
    else if ($sayi<0 && $sayi%2==-1)
    {
        echo "sayı hem negatif hem de tektir.";
    }
    else
    {
        echo"sayı değeri sıfırdır.";
    }
}


?>
<?php

/*
//KARAR YAPISI
$sayi=7;
echo "tanımlanmış sayı değeri:".$sayi."<br>";
if($sayi>3 && $sayi<10)
{
    echo" sayı değeri 3 ten büyük 10'dan küçüktür";
}


//if-Else yapısı
$ad="Aysima";
$sifre="123456";
echo"tanımlanan kullanıcı adı:".$ad."<br>".
"tanımlanan kullanıcı şifre:".$sifre."<br>";
if($ad=="Aysima" && $sifre==123456)
{
    echo"kullanıcı adı ve şifre doğru";
}
else
{
    echo"kullanıcı adı ve şifre yanlış";
}


//Turn yapısı
$sayi=50;
echo "tanımlanmış sayı değeri:".$sayi."<br>";
echo($sayi>10)?"sayı 10'dan büyük:":"Sayı 10'dan küçük"; 


*/








?>




