<?php
include "ders3.php";
$kayit=$db->exec("INSERT INTO deneme SET
id='10',ad='mehmet',soyad='Atıcı'");
if($kayit)
{
	echo "kayıt gerçekleştirildi.ID değeri: ".$db->lastInsertId();
}

 ?>