<?php
include "hafta11.php";
//Veritabanına Exec Kullanarak Manuel Veri Ekleme
$kayit=$db->exec("INSERT INTO deneme SET
id='4',ad='Gelişim','soyad=''üniversitesi'");
if($kayit)
{
	echo "kayıt işlemi başarılı";
}
else{
	echo "kayıt işlemi başarısız";
}
//veritabanına prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare ("INSERT INTO deneme SET
id=?
ad=?
soyad=?
");
$kayit=$sorgu->execute(array("3","Nisa","KARAGÖZ"));
if($kayit)
{
echo "kayıt işlemi başarılı";
}
else{
	echo "kayıt işlemi başarısız";
}
//veritabanına prepare kullanarak manuel veri ekleme
$sorgu=$db->prepare("INSERT INTO deneme SET id=id,ad=ad,soyadd=soyad");
$kayit=$sorgu=>"CEBECİ","id"="4","ad"=>"irem"));
if($kayit)
{
echo "kayıt işlemi başarılı"
}
else{
	echo "kayıt işlemi başarısız";
}



?>