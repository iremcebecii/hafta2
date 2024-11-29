<?php
/*$bilgiler=array(
"Eğitim Bilgileri:",
	"Lisans:"=>"gelişim üniversitesi",
	"deneyim:"=>"çalışmadım",
		"programlama dilleri:",
			"PHP","Java Script","HTML ","CSS","Phython",
			);
echo "<pre>";
print_r($bilgiler);
echo"</pre>";*/

/*haftanın günleri yazdırma*/
/*$gunler=array("pazartesi","salı","çarşamba","perşembe","cuma","cumartesi","pazar");
echo "<b>haftanın günleri</b>","<br>";
for($i=0;$i<count($gunler);$i++)
{
		echo $gunler[$i]."<br>";
}*/

/*çok boyutlu diziler*/
/*$ogrenci=array();
$ogrenci[0]=array("nisa","kastamonu");
$ogrenci[1]=array("kevser","giresun");
$ogrenci[2]=array("furkan","malatya");
echo "<pre>";
	print_r($ogrenci);
echo "</pre>";*/

/*$okul=array(
	"8/A"=>array(
		"hakan"=>95,
		"kevser"=>45,
		"ayşe"=>65),
		"8/B"=>array(
		"nisa"=>65,
		"fatih"=>65,
		"irem"=>60),
);
	echo "<pre>";
	print_r($okul);
	echo"</pre>";
	echo "Notu:".$okul["8/B"]["nisa"]."<br>";
	echo "Notu:".$okul["8/A"]["kevser"];*/
	
	
	$kutuphane=[
	[
	"kitabın adı:"=>"nutuk",
	"kitabın yazarı:"=>"mustafa kemal atatürk",
	"yayınevi:"=>"yapı kredi yayınları"
	],
	[
	"kitabın adı:"=>"küçük prens",
	"kitabın yazarı:"=>"antoine de saint-exupery",
	"yayınevi:"=>"can çocuk yayınları"
	]
	];
	foreach($kutuphane as $kitap)
	{
			foreach($kitap as $anahtar=>$deger)
			{
				echo $anahtar."-".$deger."<br>";
			}
	}
			
	




?>



