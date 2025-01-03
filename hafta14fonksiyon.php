<html>

<head>
    <meta charset="UTF-8">
   
    <title>FONKSİYON</title>
</head>
<body>
<form  name="form" action="" method="POST">
    <table>
       
        <tr>
            <td>Adınızı girin:</td><td><input type="text" name="ad"></td>
        </tr>
        <tr>
            <td>1.sayıyı girin:</td><td><input type="text" name="s1"></td>
        </tr>
        <tr>
            <td>2.sayıyı girin:</td><td><input type="text" name="s2"></td>
        </tr>
        <tr>
            <td>Seçim yapınız:</td>
            <td><select name="secim">
                <option value="ad">ADINI YAZDIR</option>
                <option value="topla">TOPLAMA</option>
                <option value="carp">CARPMA</option>
                <option value="cikar">CIKARMA</option>
                <option value="bol">BÖLME</option>
            </select>
            </td>
        </tr>
        <tr><td><input type="submit" name="gonder" value="Gönder"></td>
    </tr>
    </table>
    </form>
</body>
</html>
<?php
function merhaba($isim)
{
    echo"hoşgeldin".$isim;
}
function topla($a,$b)
{
    echo $a+$b;
}
function carp($a,$b)
{
    echo $a*$b;
}
function cikar($a,$b)
{
    echo $a-$b;
}
function bol($a,$b)
{
    echo $a/$b;
}
if(isset($_POST["gonder"]))
{
    $ks1=$_POST["s1"];
    $ks2=$_POST["s2"];
    $kad=$_POST["ad"];
    $ksecim=$_POST["secim"];
    switch($ksecim)
    {
        case 'ad': merhaba ($kad);break;
        case 'topla':topla($ks1,$ks2);break;
        case 'carp':carp($ks1,$ks2);break;
        case 'cikar':cikar($ks1,$ks2);break;
        case 'bol':bol($ks1,$ks2);break;
    }
}

?>