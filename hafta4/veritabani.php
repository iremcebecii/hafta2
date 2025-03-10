<?php
include("baglan.php");
if(isset($_POST["giris"]))
{
	$kadi=$_POST["kullanici_adi"];
	$ksifre=$_POST["ksifre"];
	$sorgu=$db->query("SELECT * FROM kullanicilar WHERE
	kullanici_adi='$kadi' and
	sifre='$ksifre'",PDO::FETCH_ASSOC);
	if($sorgu->rowCount()>0)
	{
	session_start();
	$ad_soyad=$sorgu->fetch();
	$_SESSION["kadi"]=$kadi;
	$_SESSION["ksifre"]=$ksifre;
	echo "<h3>hoşgeldiniz:".$ad_soyad["ad_soyad"]."
	sayfamı ziyaret ettiğiniz için teşekkür ederim."."
	</h3>"."<br>"."<a href='cikis.php'>çıkış yap</a>";
	}
	else
	{
	echo"<h3<hatalı giriş yaptını<.anasayfaya yönlendiriliyorsunuz.</h3>";
	header("refresh:4; url=form.php");
	}
	}
