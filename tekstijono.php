<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<title>siistintä harjoitus</title>
</head>

<body>

<?php

$kokonimi=" koirakoira  mun nimi    on moira    . \n"; 


function nimi($kokonimi) {
	
$nimet = explode(" ", $kokonimi); 
$kokonimi=""; 


foreach ($nimet as $nimi) { 
	$kokonimi .= ucfirst($nimi) . " "; 
} 


$kokonimi = trim($kokonimi); 

	echo $kokonimi;
}
	nimi($kokonimi);
?>

</body>
</html>