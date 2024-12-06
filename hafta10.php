<?php
//dizilerde ekle çıkar fonksiyonu
/*echo "array_unshift() kullanımı"."<br>";
$diller=array("PHP"."C#");
array_unshift($diller,"Javascript","python");
print_r($diller);
echo "array_shift() kullanımı"."<br>";
array_shift($diller);
print_r($diller);
echo"<h3>array_push() kullanımı </h3>";
array_push($diller,"vue","laravel");
print_r($diller);
echo"<h3>array_pop() kullanımı </h3>";
array_pop($diller,"vue","laravel");
print_r($diller);
echo"<h3>unset kullanımı </h3>";
unset($diller["2"]);
print_r($diller);*/

//dizi birleştirme
/*echo "<h3>dizi elemanlarını birleştirme</h3>";
$marmara_bolge=array("balıkesir","istanbul","bursa");
$ege_bolge=array("izmir","manisa","aydın");
$tum_iller=array_merge($marmara_bolge,$ege_bolge);
echo "<pre>";
print_r($tum_iller);
echo "<pre>";*/

//dizideki ortak elemanı bulma
/*echo "<h3>dizideki ortak eleman</h3>";
$dizi1=array("Araba","Kalem","Ev");
$dizi2=array("Araba","kalem","masa");
$dizi3=array("Kalem","Araba","Sandalye");
$dizi4=array("Masa","Kalem","Araba");
$ortak_bul=array_intersect($dizi1,$dizi2,$dizi3,$dizi4);
echo "<pre>";
print_r($ortak_bul);
echo "<pre>";*/

//dizi elemanlarını tek seferde çıktı alma
/*echo "<h3>implode kullanımı</h3>";
$programlamadilleri=array("PHP","HTML","CSS","Javascript");
$duzenle=implode("|",$programlamadilleri);
echo $duzenle;*/

//dizi elemanlarından rastgele seçim
/*echo"<h3>diziden rastgele eleman seçme</h3>";
$sehir=array("balıkesir","istanbul","izmir","van","kastamonu","antalya");
$rastgele=array_rand($sehir);
echo $sehir[$rastgele];*/

/*echo "<h3>dizilerde sıralama</h3>";
$iller=array(
	"ankara"=>6,
	"istanbul"=>34,
	"izmir"=>35,
	"balıkesir"=>10,
	"kocaeli"=>41,
	"kırklareli"=>39
	);
	echo "<h5>dizi elamanlarını anahtar değerlerini koruyarak  küçükten büyüğe sıralama</h5>";
	echo"<pre>";
	asort($iller);
	print_r($iller);
	echo"<pre>";
	echo "<h5>dizi elamanlarını anahtar değerlerini koruyarak büyükten küçüğe sıralama</h5>";
	echo"<pre>";
	arsort($iller);
	print_r($iller);
	echo"<pre>";
	
	
	$sayi=array(
	"1"=>10,
	"2"=>30,
	"3"=>5,
	"4"=>85,
	"5"=>126,
	);
	echo "<h5>dizi elemanlarını küçükten büyüğe sıralama</h5>";echo"<pre>";
	echo"<pre>";
	sort($sayi);
	print_r($sayi);
	echo"<pre>";
	
	echo "<h5>dizi elemanlarını büyükten küçüğe sıralama</h5>";echo"<pre>";
	echo"<pre>";
	rsort($sayi);
	print_r($sayi);
	echo"<pre>";
	
	echo "<h5>dizi elemanlarını rastgele sıralama</h5>";echo"<pre>";
	echo"<pre>";
	shuffle($sayi);
	print_r($sayi);
	echo"<pre>";
	
	echo "<h5>dizi elemanlarını indis değerlerine göre küçükten büyüğe sıralama</h5>";echo"<pre>";
	echo"<pre>";
	ksort($sayi);
	print_r($sayi);
	echo"<pre>";
	
	echo "<h5>dizi elemanlarını indis değerlerine göre büyükten küçüğe sıralama</h5>";echo"<pre>";
	echo"<pre>";
	krsort($sayi);
	print_r($sayi);
	echo"<pre>";*/
	
	//dizi elemanlarını tersine çevirme
	/*echo"<h3>dizi elemanlarını tersine çevirme<h3>";
	$isim=array("çisem","tuğba","mehmet","aysun","bilal");
	$ters_cevir=array_reverse($isim);
	echo "ilk hali"."<br>";
	echo"<pre>";
	print_r($isim);
	echo"<pre>";
	echo "ters hali"."<br>";
	echo"<pre>";
	print_r($ters_cevir);
	echo"<pre>";*/
	
	//dizi sayıcıları
	echo"<h3>dizi sayıcıları<h3>";
	$sayi=array(6,2,4,1,1,3,5,6);
	echo "eleman sayısı:".count($sayi)."<br>".
		"dizideki elemanların çarpım sonucu:
		".array_product($sayi)."<br>".
		"dizideki elemanların toplam sayısı:
		".array_product($sayi)."<br>".
		"dizideki tekrar eden elemanlar:";
		print_r(array_count_values($sayi));
		
	
	
	
	













?>