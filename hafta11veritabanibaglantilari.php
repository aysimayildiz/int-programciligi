<?php
try{
    $db=new PDO("mysql:host=localhost;
    dbname=web;charset=utf8","root","");
    echo"kayıt başarılı";
}
catch(PDOException $e)
{
    echo $e->getMessage();
}
?>