<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

        <form name="form" action="hesapla.php" method="post">
        <table>
            <tr>
                <td>Ad:</td> 
                <td><input type="text" name="adi"></td>
            </tr>
            <tr>
                <td>Soyadı:</td> <td><input type="text" name="soyadi"></td>
            </tr>
            <tr>
                <td>Vize Notunu giriniz:(%50)</td><td><input type="text" name="vize"></td>
        </tr>
        <tr><td>Final Notunu giriniz:(%25)</td><td><input type="text" name="final"></td>
</tr>
<tr><td>Proje Notunu giriniz:(%25)</td><td><input type="text" name="proje"></td>
</tr>
<tr><td><input type="submit" name="kaydet" value="hesapla"> </td></tr>
        </form>
    </table>
    
</body>
</html>

