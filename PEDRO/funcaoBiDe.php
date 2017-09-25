<?php





function decimal ($n){

$final=0;
$resul='';  //texto vazio
$impar=0;
$par=0;

	while ($n>1){

		$resto = $n % 2;
		$n = intdiv($n, 2); 
		if($resto==0){
			$par='0';
			$resul= $resul . $par;
			
			
		}else{
			$impar='1';
			$resul= $resul . $impar;
			
		}
		
	}

	$resul = $resul . $n;
	
	$final= strrev($resul);
	return($final);
	

}


$x=decimal(125);

print("$x"."\n");

?>


