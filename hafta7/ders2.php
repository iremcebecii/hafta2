<html>
<head>
	<title>FAKTORİYEL</title>
	</head>
	<body>
		<form name="form" action="" method="POST">
		<table>
		<tr>
		<td>1.sayı giriniz: <input type="text" name="sayi"><input type ="submit" name="gonder" value="GÖNDER"></td>
		</tr>
		</table>
		</form>
		<form name="form" action="" method="POST">
		<table>
		<tr>
		<td>2.sayı giriniz: <input type="text" name="sayi"><input type ="submit" name="gonder" value="GÖNDER"></td>
		</tr>
		</table>
		</form>
	</body>
	</html>


<?php


if(isset($_POST["gonder"]))
{
	$ksayi=$_POST["sayi"];
	if($ksayi<0)
	{
		echo "negatif sayıların faktöriyeli bulunmaz."."<br>";
	}
	else
	{
		$faktoriyel=1;
		for($i=1;$i<=$ksayi;$i++)
		{
			$faktoriyel=$faktoriyel*$i;
		}
			echo $ksayi."sayısının faktöriyeli:".$faktoriyel;
		}
	}
	
 ?>
 