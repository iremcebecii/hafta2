<?php
include "ders3.php";
$guncelle=$db->exec("UPDATE deneme SET adi='irem' WHERE 
soyad='Benli'");
if ($guncelle)
{
	echo "güncelleme başarılı";
}
else
{	
	echo "güncelleme başarısız";
}
//veritabanında prepare ile veri güncelleme
$sorgu=$db->prepare ("INSERT INTO deneme SET
id=?
ad=?
soyad=?
");
$guncelle=$sorgu->execute(array("çisem","atıcı"));
if($guncelle)
{
echo "güncelleme başarılı";
}
else{
	echo "güncelleme başarısız";
}