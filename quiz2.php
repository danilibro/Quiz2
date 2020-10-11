<?php  

$operator = ["*","+",":","%","-"];
//print_r($operator);


function hitung($str) {
	//echo $pecah_angka[0];
	$panjang = strlen($pecah_angka[0]);
	$opr = substr($str, $panjang,1); 	
	//print_r (explode("+",$str));

	$pecah_angka = explode($opr,$str);
	print_r($pecah_angka)
}

$tulis = "2+3";
hitung($tulis);
?>