<?php
try
{
	$db=new PDO("mysql:host=localhost;
	dbname=login5; charset=utf-8;","root","");
	}
	catch(PDOExceptiob $e)
	{
		echo $e->getMessage();
		}
		?>