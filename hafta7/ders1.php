
<html>
<head>
<meta charset="UTF-8">
	<title>ÜÇE VE BEŞE BÖLÜNME</title>
	</head>
	<body>
		<form name="form" action="" method="POST">
		<table>
		<tr>
		<td>1.sayı giriniz: <input type="text" name="sayi1"></td>
		</tr>
		<tr>
		<td>2.sayı giriniz: <input type="text" name="sayi2"></td>
		</tr>
		<tr>
		<td>seçim yapınız:
		<select name="secim">
		<option value="ucebolunme">iki sayı arasında 3'e bölünen sayılar</option>
		<option value="besebolunme">iki sayı arasında 5'e bölünen sayılar</option>
		</select>
		</td>
		</tr>
		<tr>
		<td><input type="submit" name="gonder" value="GÖNDER"></td>
		</tr>
		</table>
		</form>	
	</body>
	</html>


<?php
	if(isset($_POST["GONDER"]))
	{
		$ksayi1=$_POST["sayi1"];
		$ksayi2=$_POST["sayi2"];
		$ksecim=$_POST["secim"];
		switch($ksecim)
		{
			case "ucebolunme":
				if($ksayi1>$ksayi2)
				{
					$enb=$ksayi1;
					$enb=$ksayi2;					
	}	
	else
	{
		$enb=$ksayi2;
		$enb=$ksayi1;
	}
	for($i=$enk;$i<=$enb;$i++)
	{
		if($i%3==0)
		{
			echo "3'e bölünen sayılar:".$i."<br>";
		}

		}
			case "besebolunme":
				if($ksayi1>$ksayi2)
				{
					$enb=$ksayi1;
					$enb=$ksayi2;					
	}	
	else
	{
		$enb=$ksayi2;
		$enb=$ksayi1;
	}
	for($i=$enk;$i<=$enb;$i++)
	{
		if($i%5==0)
		{
			echo "5'e bölünen sayılar:".$i."<br>";
	}

			break;
		}
	}
			


 ?>
 