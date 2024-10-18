<?php
//isset,unset kullanımı
echo "isset($AdiSoyadi)"."<br>";
$AdiSoyadi="Çisem Yaşar";
echo "isset($AdiSoyadi)";

$degisken="Gelişim Üniversitesi";
echo $degisken."<br>";
unset(degisken);
echo $degisken;

$yil=2024;
$doğum_yili=1999;
$yas=$yil-$doğum_yili;
echo "benim yaşım=".$yas;

//basit hesap makinesi
echo "<h3>basit hesap makinesi</h3>"."<br>";
$sayi1=35;
$sayi2=5;

$topla=$sayi1+$sayi2;
$cikar=$sayi1-$sayi2;
$carp=$sayi1*$sayi2;
$bol=$sayi1/$sayi2;
$mod=$sayi1%$sayi2;
$us=$sayi1**$sayi2;


echo "1.sayının değeri: ".$sayi1."<br>".
 "2.sayının değeri: ".$sayi2."<br>".
    "toplama işleminin sonucu: ".$topla."<br>".
    "çıkarma işleminin sonucu: ".$cikar."<br>".
	"çarpma işleminin sonucu: ".$carp."<br>".
	"bölme işleminin sonucu: ".$bol."<br>".
	"mod işleminin sonucu: ".$mod."<br>".
	"üs alma işleminin sonucu: ".$us;
	
//artırma ve azaltma operatörleri
$sayi=15;
echo "<u> yazmış olduğunuz sayının değeri:
</u>".$sayi."<br>".
"sayının dğerini artırma işlemi:".++$sayi."<br>".
"sayının değerini azaltma işlemi:".--$sayi;
?>