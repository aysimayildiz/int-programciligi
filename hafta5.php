<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BEDEN KİTLE İNDEKSİ</title>
</head>
<body>
    <h3>VÜCUT KİTLE İNDEKSİ HESAPLAMA</h3>
<form name="form" action="hafta5_bki.php" method="post">
    <table>
        <tr>
            <td>Adınız:</td> <td><input type="text" name="ad"></td>
        </tr>
        <tr>
            <td>Soyadınız:</td> <td><input type="text" name="soyad"></td>
        </tr>
        <tr>
            <td>Cinsiyetiniz:</td> <td><input type="radio" name="cinsiyet">Kadın <input type="radio" name="cinsiyet">Erkek</td>
        </tr>
        <tr>
            <td>Doğum Yılını Seçiniz:</td> <td> <select name="dogumyili">
                <option value="2005">2005</option> 
                <option value="2004">2004</option>
                <option value="2003">2003</option>
                <option value="2002">2002</option>
                <option value="2001">2001</option>
                <option value="2000">2000</option>
            </select></td>
        </tr>
        <tr>
            <td>Boyunuz:</td> <td><input type="text" name="boy"></td>
        </tr>
        <tr>
            <td>Kilonuz:</td> <td><input type="text" name="kilo"></td>
        </tr>
        <tr>
            <td><input type="submit" value="HESAPLA" name="hesapla"></td>
        </tr>
        
</body>
</html>