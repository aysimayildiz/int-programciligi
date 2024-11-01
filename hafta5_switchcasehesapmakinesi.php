<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
</head>
<body>
    <h3>SWİTCH İLE HESAP MAKİNESİ</h3>
    <form name="form" action="" method="post">
        <table>
    <tr>
        <td>1.Sayıyı Giriniz:</td> <td><input type="text" name="sayi1"></td>
    </tr>
    <tr>
        <td>2.Sayıyı Giriniz:</td> <td><input type="text" name="sayi2"></td>
    </tr>
    <tr>
        <td>işlem tipini seçiniz:</td> <td><select name="secim">
            <option value="topla">Toplama</option>
            <option value="cikar">Çıkarma</option>
            <option value="carp">Çarpma</option>
            <option value="bol">Bölme</option>
            </select>
        </td>
        </tr>
       <tr><td><input type="submit" name="gonder" value="hesapla"></td></input></tr>
       
        </form>
        </table>
</body>
</html>

<?php
if(isset($_POST["gonder"]))
{
    $ksayi1=$_POST["sayi1"];
    $ksayi2=$_POST["sayi2"];
    $ksecim=$_POST["secim"];
    switch($ksecim)
    {
        case "topla":
            $topla=$ksayi1+$ksayi2;
            echo"toplama işleminin sonucu:".$topla;
            break;
            case "cikar":
                $cikar=$ksayi1-$ksayi2;
                echo"çıkarma işleminin sonucu:".$cikar;
                break;
                case "carp":
             $carp=$ksayi1*$ksayi2;
                    echo"çarpma işleminin sonucu:".$carp;
                    break;
                    case "bol":
                        $bol=$ksayi1/$ksayi2;
                        echo"bölme işleminin sonucu:".$bol;
                        break;

    }

}


?>