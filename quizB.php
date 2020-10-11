<?php
function perolehan_medali($param){

	$perolehan = array(
		array(
			'negara' => "indonesia",
			'emas' => 2,
			'perak' => 1,
			'perunggu' => 0,
		),
		array(
			'negara' => "india",
			'emas' => 1,
			'perak' => 2,
			'perunggu' => 0,
		),
		array(
			'negara' => "Korea Selatan",
			'emas' => 1,
			'perak' => 0,
			'perunggu' => 0,
		)
	);
	$num = 0;
	for ($i=0; $i < count($perolehan); $i++) { 
	    if ($perolehan[$i]['negara'] === $param[0]) {
			echo "<pre>";
			print_r($perolehan);
			echo "</pre>";
			$num = 1;
			break;
		}
	}
	if ($num === 0) {
		print_r("no data");
	}
	
	// echo array_search("indonesia",$perolehan);
	// if (array_search("indonesia",$perolehan)) {
	// 	echo "<pre>";
	// 	print_r($perolehan);
	// 	echo "</pre>";
	// } else {
	// 	print_r("no data");
	// }
	
	

}

$input = array("Korea Selatan", "emas");
perolehan_medali($input);
?>