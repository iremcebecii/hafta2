<html>
<head>
<meta charset="UTF-8">
<title>EKLE SİL GÜNCELLE</title>
	</head>

<body>
	<form name="form" action="" method="post">
	<table>
	<tr>
		<td>TC NUMARASI:</td>
		<td><input type="text" name="tc"></td>
		</tr>
		<tr>
		<td>ADI:</td>
		<td><input type="text" name="ad"></td>
		</tr>
		<tr>
		<td>SOYADI:</td>
		<td><input type="text" name="soyad"></td>
		</tr>
		<tr>
		<td colspan="3">
			<input type="submit" name="kaydet" value="KAYDET">
		<input type="submit" name ="guncelle" value="GÜNCELLE">
		<input type="submit" name ="sil" value="SİL">
		</td>
		</tr>
		</table>
		</form>
		</body>
</html>
	<?php
	$db=new PDO("mysql:host=localhost; dbname=ornekk; charset=utf8","root","");
	if(isset($_POST["kaydet"]))
	{
		$ktc=$_POST["tc"];
		$kad=$_POST["ad"];
		$ksoyad=$_POST["soyad"];
		if($db)
		{
				echo "VERİTABANI BAĞLANTISI GERÇEKLEŞTİ"."
				<br>";
				$kaydet=$db->exec("INSERT INTO ogrencidurum(ad,soyad,tc)VALUES
				('$ktc','$kad','$ksoyad')");
				if($kaydet)
				{
					echo "Kayıt ekleme başarılı";
				}
				else
				{
					echo "Kayıt ekleme başarısız";
				}
			}
		}
		if(isset($_POST["guncelle"]))
	{
		$ktc=$_POST["tc"];
		$kad=$_POST["ad"];
		$ksoyad=$_POST["soyad"];
		if($db)
		{
				echo "VERİTABANI BAĞLANTISI GERÇEKLEŞTİ"."
				<br>";
				$guncelle=$db->exec("UPDATE ogrencidurum SET ad='$kad',soyad='$ksoyad',WHERE tc='$ktc'");
				if($guncelle)
				{
					echo "güncelleme başarılı";
				}
				else
				{
					echo "güncelleme başarısız";
					
				}
		}
	}
	if(isset($_POST["sil"]))
	{
		$ktc=$_POST["tc"];
		$kad=$_POST["ad"];
		$ksoyad=$_POST["soyad"];
		if($db)
		{
				echo "VERİTABANI BAĞLANTISI GERÇEKLEŞTİ"."
				<br>";
				$sil=$db->exec("DELETE FROM ogrencidurum WHERE ad='$kad'");
				if($sil)
				{
					echo "silme işlemi başarı ile tamamlandı";
				}
				else
				{
					echo "silme işlemi başarısız";
					
				}
		}
	}
	
?>

	
	
		
		